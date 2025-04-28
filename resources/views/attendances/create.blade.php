@extends('layouts.app')

@section('content')
<h3>Add New Attendance</h3>
<form action="{{ route('attendances.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="employee_name" class="form-label">Nama Karyawan</label>
        <input type="text" name="employee_name" id="employee_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="clock_in" class="form-label">Clock In</label>
        <input type="datetime-local" name="clock_in" id="clock_in" class="form-control">
    </div>
    <div class="mb-3">
        <label for="clock_out" class="form-label">Clock Out</label>
        <input type="datetime-local" name="clock_out" id="clock_out" class="form-control">
    </div>
    <div class="mb-3">
        <label for="overtime" class="form-label">Overtime (minutes)</label>
        <input type="number" name="overtime" id="overtime" class="form-control">
    </div>
    <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" name="location" id="location" class="form-control">
    </div>
    <div class="mb-3">
        <label for="notes" class="form-label">Notes</label>
        <textarea name="notes" id="notes" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('attendances.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection