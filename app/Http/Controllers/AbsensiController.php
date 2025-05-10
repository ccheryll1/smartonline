<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::all();
        return view('backend.absensi.index', compact('absensi'));
    }

    public function create()
    {
        return view('backend.absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_karyawan' => 'required|string|max:255',
            'clock_in' => 'required',
            'clock_out' => 'required',
            'picture' => 'nullable|string',
            'location' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $clockIn = Carbon::parse($request->clock_in);
        $clockOut = Carbon::parse($request->clock_out);

        $regularEndTime = Carbon::parse('17:00:00'); // Jam kerja selesai pukul 17:00
        $regularHours = 7; // Durasi kerja normal (10:00 - 17:00 = 7 jam)

        $totalHours = $clockIn->diffInHours($clockOut);
        $overtime = 0;

        if ($clockOut->greaterThan($regularEndTime)) {
            $overtime = $clockOut->diffInHours($regularEndTime);
        }

        Absensi::create([
            'nama_karyawan' => $request->nama_karyawan,
            'clock_in' => $clockIn,
            'clock_out' => $clockOut,
            'overtime' => gmdate('H:i:s', $overtime * 3600), // Konversi jam ke format H:i:s
            'picture' => $request->picture,
            'location' => $request->location,
            'notes' => $request->notes,
        ]);

        return redirect()->route('absensi.index')->with('success', 'Data absensi berhasil disimpan.');
    }

    public function edit(Absensi $absensi)
    {
        return view('backend.absensi.edit', compact('absensi'));
    }

    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'nama_karyawan' => 'required|string|max:255',
            'clock_in' => 'nullable',
            'clock_out' => 'nullable',
            'picture' => 'nullable|string',
            'location' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $clockIn = Carbon::parse($request->clock_in);
        $clockOut = Carbon::parse($request->clock_out);

        $regularEndTime = Carbon::parse('17:00:00');
        $overtime = 0;

        if ($clockOut->greaterThan($regularEndTime)) {
            $overtime = $clockOut->diffInHours($regularEndTime);
        }

        $absensi->update([
            'nama_karyawan' => $request->nama_karyawan,
            'clock_in' => $clockIn,
            'clock_out' => $clockOut,
            'overtime' => gmdate('H:i:s', $overtime * 3600),
            'picture' => $request->picture,
            'location' => $request->location,
            'notes' => $request->notes,
        ]);

        return redirect()->route('backend.absensi.index')->with('success', 'Data absensi berhasil diperbarui.');
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect()->route('backend.absensi.index')->with('success', 'Data absensi berhasil dihapus.');
    }
}