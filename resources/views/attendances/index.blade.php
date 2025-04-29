@extends('layouts.app')

@section('content')
<div class="row mb-4">
    <!-- Summary Cards -->
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Present Summary</h6>
                <h3 class="mb-0">{{ $present }}</h3>
                <!-- <small class="text-muted">12 vs yesterday</small> -->
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Late Clock-In</h6>
                <h3 class="mb-0">{{ $late }}</h3>
                <!-- <small class="text-muted">4 vs yesterday</small> -->
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Early Clock-In</h6>
                <h3 class="mb-0">{{ $early }}</h3>
                <!-- <small class="text-muted">0 vs yesterday</small> -->
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Absent</h6>
                <h3 class="mb-0">{{ $absent }}</h3>
                <!-- <small class="text-muted">2 vs yesterday</small> -->
            </div>
        </div>
    </div>
</div>

<div class="mb-3 d-flex justify-content-between">
    <div>
        <input type="text" class="form-control" placeholder="Search employee name" style="width: 200px; display: inline-block;">
        <input type="date" class="form-control" style="width: 150px; display: inline-block;">
        <button class="btn btn-outline-secondary">Advance Filter</button>
    </div>
    <a href="{{ route('attendances.create') }}" class="btn btn-primary">Add Attendance</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Clock In & Out</th>
                    <th>Overtime</th>
                    <th>Picture</th>
                    <th>Location</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                <tr>
                    <td>
                        <img src="https://via.placeholder.com/30" class="rounded-circle me-2" alt="Profile">
                        {{ $attendance->employee_name }}
                        <a href="#" class="text-muted small d-block">View profile</a>
                    </td>
                    <td>
                        {{ $attendance->clock_in ? $attendance->clock_in->format('H:i') : '-' }} - 
                        {{ $attendance->clock_out ? $attendance->clock_out->format('H:i') : '-' }}
                    </td>
                    <td>{{ $attendance->overtime }} mins</td>
                    <td>-</td> <!-- Placeholder untuk Picture -->
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
</div>
@endsection