<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartOnline - Time Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-4">
                <span class="text-xl font-bold">LOGO</span>
                <span class="text-lg">Time Management</span>
            </div>
            <nav class="space-x-4">
                <a href="{{ route('absensi.index') }}" class="{{ request()->routeIs('absensi.index') ? 'bg-blue-700' : 'hover:bg-blue-700' }} px-4 py-2 rounded">Absensi</a>
                <a href="#" class="hover:bg-blue-700 px-4 py-2 rounded">Employee</a>
                <a href="#" class="hover:bg-blue-700 px-4 py-2 rounded">Lokasi</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>
</body>
</html>