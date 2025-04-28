@extends('layouts.app')

@section('content')
<h3>Edit Attendance</h3>
<form action="{{ route('attendances.update', $attendance) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="employee_name" class="form-label">Nama Karyawan</label>
        <input type="text" name="employee_name" id="employee_name" class="form-control" value="{{ $attendance->employee_name }}" required>
    </div>
    <div class="mb-3">
        <label for="clock_in" class="form-label">Clock In</label>
        <input type="datetime-local" name="clock_in" id="clock_in" class="form-control" value="{{ $attendance->clock_in ? $attendance->clock_in->format('Y-m-d\TH:i') : '' }}">
    </div>
    <div class="mb-3">
        <label for="clock_out" class="form-label">Clock Out</label>
        <input type="datetime-local" name="clock_out" id="clock_out" class="form-control" value="{{ $attendance->clock_out ? $attendance->clock_out->format('Y-m-d\TH:i') : '' }}">
    </div>
    <div class="mb-3">
        <label for="overtime" class="form-label">Overtime (minutes)</label>
        <input type="number" name="overtime" id="overtime" class="form-control" value="{{ $attendance->overtime }}">
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" id="location" class="form-control" value="{{ $attendance->location }}">
    </div>
    <div class="mb-3">
        <label for="notes" class="form-label">Notes</label>
        <textarea name="notes" id="notes" class="form-control">{{ $attendance->notes }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection