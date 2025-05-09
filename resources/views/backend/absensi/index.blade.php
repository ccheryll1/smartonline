@extends('backend.layouts.app')

@section('content')
    <div class="bg-white p-5 rounded-lg shadow-md">
        <!-- Header dan Tombol Create -->
        <div class="flex justify-between items-center mb-5">
            <h1 class="text-xl font-bold text-gray-900">Attendance</h1>
            <a href="{{ route('absensi.create') }}" class="bg-blue-600 text-white px-3 py-1.5 rounded-lg hover:bg-blue-700 transition duration-200 text-sm">Add Attendance</a>
        </div>

        <!-- Summary Widgets -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5">
            <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                <h3 class="text-xs font-semibold text-gray-500 mb-1">Present Summary</h3>
                <div class="flex items-baseline space-x-2">
                    <p class="text-[30px] font-bold text-gray-900">{{ $absensi->where('clock_in', '!=', null)->count() }}</p>
                    <span class="text-xs text-gray-400">vs yesterday</span>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                <h3 class="text-xs font-semibold text-gray-500 mb-1">Not Present Summary</h3>
                <div class="flex items-baseline space-x-2">
                    <p class="text-[30px] font-bold text-gray-900">{{ $absensi->where('clock_in', null)->count() }}</p>
                    <span class="text-xs text-gray-400">vs yesterday</span>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg border border-gray-200 shadow-sm">
                <h3 class="text-xs font-semibold text-gray-500 mb-1">Away Summary</h3>
                <div class="flex items-baseline space-x-2">
                    <p class="text-[30px] font-bold text-gray-900">0</p>
                    <span class="text-xs text-gray-400">vs yesterday</span>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="mb-5 flex flex-col md:flex-row md:space-x-3 space-y-3 md:space-y-0">
            <input type="text" placeholder="Search employee" class="border border-gray-200 rounded-lg px-3 py-1.5 w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
            <select class="border border-gray-200 rounded-lg px-3 py-1.5 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                <option>Date Range</option>
                <option>Today</option>
                <option>This Week</option>
                <option>This Month</option>
            </select>
            <select class="border border-gray-200 rounded-lg px-3 py-1.5 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm">
                <option>Attendance Filter</option>
                <option>Present</option>
                <option>Not Present</option>
                <option>Away</option>
            </select>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Employee Name</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Clock-in & Out</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Overtime</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Picture</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Location</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Note</th>
                        <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($absensi as $data)
                        <tr>
                            <td class="px-4 py-3 flex items-center space-x-3">
                                <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full w-10 h-10">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">{{ $data->nama_karyawan }}</p>
                                    <p class="text-xs text-gray-500">Mandor</p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->clock_in }} - {{ $data->clock_out }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->overtime ?? '0h 0m' }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->picture ?? 'N/A' }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->location ?? 'N/A' }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->notes ?? 'N/A' }}</td>
                            <td class="px-4 py-3 whitespace-nowrap space-x-2">
                                <a href="{{ route('absensi.edit', $data->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition duration-200 text-xs">Edit</a>
                                <form action="{{ route('absensi.destroy', $data->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-200 text-xs" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-3 text-center text-gray-500 text-sm">No attendance data available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection