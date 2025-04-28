<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Attendeance;
use Illuminate\Http\Request;


class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendeance::all();
        
        // Hitung summary
        $present = $attendances->whereNotNull('clock_in')->count();
        $late = $attendances->whereNotNull('clock_in')
            ->where('clock_in', '>', now()->startOfDay()->addHours(9))
            ->count();
        $absent = $attendances->whereNull('clock_in')->count();

        return view('attendances.index', compact('attendances', 'present', 'late', 'absent'));
    }

    public function create()
    {
        return view('attendances.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_name' => 'required',
            'clock_in' => 'nullable|date',
            'clock_out' => 'nullable|date|after:clock_in',
            'overtime' => 'nullable|integer',
            'location' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        Attendeance::create($request->all());
        return redirect()->route('attendances.index')->with('success', 'Attendance added successfully');
    }

    public function edit(Attendeance $attendance)
    {
        return view('attendances.edit', compact('attendance'));
    }

    public function update(Request $request, Attendeance $attendance)
    {
        $request->validate([
            'employee_name' => 'required',
            'clock_in' => 'nullable|date',
            'clock_out' => 'nullable|date|after:clock_in',
            'overtime' => 'nullable|integer',
            'location' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $attendance->update($request->all());
        return redirect()->route('attendances.index')->with('success', 'Attendance updated successfully');
    }

    public function destroy(Attendeance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendances.index')->with('success', 'Attendance deleted successfully');
    }
}
