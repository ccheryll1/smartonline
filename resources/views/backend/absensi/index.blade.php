@extends('backend.layout.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4 text-shadow-sm">Attendance</h1>

    <!-- Tombol Tambah Data -->
    <div class="mb-4">
        <a href="{{ route('absensi.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Tambah Absensi</a>
    </div>

    <!-- Notifikasi Sukses -->
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel Absensi -->
    <div class="bg-white shadow-md rounded overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-200">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Karyawan</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Clock In & Out</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Overtime</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Picture</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Location</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Notes</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($absensi as $data)
                    <tr>
                        <td class="px-6 py-4 overflow-wrap-break-word">{{ $data->nama_karyawan }}</td>
                        <td class="px-6 py-4 overflow-wrap-break-word">{{ $data->clock_in }} - {{ $data->clock_out }}</td>
                        <td class="px-6 py-4 overflow-wrap-break-word">{{ $data->overtime ?? 'Tidak ada' }}</td>
                        <td class="px-6 py-4 overflow-wrap-break-word">{{ $data->picture ?? 'Tidak ada' }}</td>
                        <td class="px-6 py-4 overflow-wrap-break-word">{{ $data->location ?? 'Tidak ada' }}</td>
                        <td class="px-6 py-4 overflow-wrap-break-word">{{ $data->notes ?? 'Tidak ada' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
                            <a href="{{ route('absensi.edit', $data->id) }}" class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                            <form action="{{ route('absensi.destroy', $data->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection