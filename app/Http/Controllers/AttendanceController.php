<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        
        // Hitung summary
        $present = $attendances->whereNotNull('clock_in')->count();
        $late = $attendances->whereNotNull('clock_in')
            ->where('clock_in', '>', now()->startOfDay()->addHours(9))
            ->count();
        $early = $attendances->whereNotNull('clock_in')
            ->where('clock_in', '<', now()->startOfDay()->addHours(8))
            ->count();
        $absent = $attendances->whereNull('clock_in')->count();

        return view('attendances.index', compact('attendances', 'present', 'late', 'early', 'absent'));
    }

    public function create()
    {
        return view('attendances.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_name' => 'required',
            'clock_in' => 'nullable|date',
            'clock_out' => 'nullable|date|after:clock_in',
            'location' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        // Ubah clock_in dan clock_out menjadi Carbon jika ada
        $clockIn = $validated['clock_in'] ? Carbon::parse($validated['clock_in']) : null;
        $clockOut = $validated['clock_out'] ? Carbon::parse($validated['clock_out']) : null;

        // Hitung overtime otomatis
        $overtime = 0;
        if ($clockIn && $clockOut) {
            // Asumsikan jam kerja normal: 08:00 - 17:00
            $normalEndTime = $clockIn->copy()->setTime(17, 0); // Jam kerja selesai pukul 17:00
            if ($clockOut->greaterThan($normalEndTime)) {
                // Hitung selisih dalam menit
                $overtime = $clockOut->diffInMinutes($normalEndTime);
            }
        }

        // Simpan data, termasuk overtime yang dihitung
        $validated['clock_in'] = $clockIn;
        $validated['clock_out'] = $clockOut;
        $validated['overtime'] = $overtime;

        Attendance::create($validated);
        return redirect()->route('attendances.index')->with('success', 'Attendance added successfully');
    }

    public function edit(Attendance $attendance)
    {
        return view('attendances.edit', compact('attendance'));
    }

    public function update(Request $request, Attendance $attendance)
    {
        $validated = $request->validate([
            'employee_name' => 'required',
            'clock_in' => 'nullable|date',
            'clock_out' => 'nullable|date|after:clock_in',
            'location' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        // Ubah clock_in dan clock_out menjadi Carbon jika ada
        $clockIn = $validated['clock_in'] ? Carbon::parse($validated['clock_in']) : null;
        $clockOut = $validated['clock_out'] ? Carbon::parse($validated['clock_out']) : null;

        // Hitung overtime otomatis
        $overtime = 0;
        if ($clockIn && $clockOut) {
            $normalEndTime = $clockIn->copy()->setTime(17, 0);
            if ($clockOut->greaterThan($normalEndTime)) {
                $overtime = $clockOut->diffInMinutes($normalEndTime);
            }
        }

        // Update data
        $validated['clock_in'] = $clockIn;
        $validated['clock_out'] = $clockOut;
        $validated['overtime'] = $overtime;

        $attendance->update($validated);
        return redirect()->route('attendances.index')->with('success', 'Attendance updated successfully');
    }

    public function destroy(Attendance $attendance)
    {
        $attendance->delete();
        return redirect()->route('attendances.index')->with('success', 'Attendance deleted successfully');
    }
}