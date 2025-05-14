@extends('backend.layouts.app')

@section('content')

               <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
<thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-user text-gray-600"></i>
                    </span>
                    Employee Name
                </th>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-clock text-gray-600"></i>
                    </span>
                    Clock-in & Out
                </th>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-hourglass-half text-gray-600"></i>
                    </span>
                    Overtime
                </th>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-image text-gray-600"></i>
                    </span>
                    Picture
                </th>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-map-marker-alt text-gray-600"></i>
                    </span>
                    Location
                </th>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-sticky-note text-gray-600"></i>
                    </span>
                    Note
                </th>
                <th class="px-4 py-2 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                    <span class="inline-flex items-center justify-center w-6 h-6 mr-2 rounded-full">
                        <i class="fas fa-cog text-gray-600"></i>
                    </span>
                    Action
                </th>
            </tr>
        </thead>                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($absensi as $data)
                        <tr>
                            <td class="px-4 py-3 flex items-center space-x-3">
                                <img src="https://via.placeholder.com/40" alt="Profile" class="rounded-full w-10 h-10">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">{{ $data->nama_karyawan }}</p>
                                    
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">
                                @if($data->clock_in)
                                    {{ $data->clock_in->format('d/m/Y H:i') }} - {{ $data->clock_out ? $data->clock_out->format('d/m/Y H:i') : 'Belum Clock Out' }}
                                @else
                                    Tidak Hadir
                                @endif
                            </td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->overtime  }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->picture  }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->location  }}</td>
                            <td class="px-4 py-3 text-sm text-gray-700">{{ $data->notes  }}</td>
                            <td class="px-4 py-3 whitespace-nowrap space-x-2">
                                <a href="{{ route('absensi.edit', $data->id) }}" class="px-2 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition duration-200 text-xs">Edit</a>
                                <form action="{{ route('absensi.destroy', $data->id) }}" method="POST" class="inline" onsubmit="confirmDelete(event)">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition duration-200 text-xs">Hapus</button>
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

@endsection