@extends('layouts.app')

@section('content')
<div class="row">
    <!-- Summary Cards -->
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Present Summary</h5>
                <h3>{{ $present }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Late Clock-In</h5>
                <h3>{{ $late }}</h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Absent</h5>
                <h3>{{ $absent }}</h3>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <a href="{{ route('attendances.create') }}" class="btn btn-primary mb-3">Add Attendance</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Karyawan</th>
                <th>Clock In & Out</th>
                <th>Overtime (min)</th>
                <th>Location</th>
                <th>Notes</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
            <tr>
                <td>{{ $attendance->employee_name }}</td>
                <td>
                    {{ $attendance->clock_in ? $attendance->clock_in->format('H:i') : '-' }} - 
                    {{ $attendance->clock_out ? $attendance->clock_out->format('H:i') : '-' }}
                </td>
                <td>{{ $attendance->overtime }}</td>
                <td>{{ $attendance->location ?? '-' }}</td>
                <td>{{ $attendance->notes ?? '-' }}</td>
                <td>
                    <a href="{{ route('attendances.edit', $attendance) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('attendances.destroy', $attendance) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection