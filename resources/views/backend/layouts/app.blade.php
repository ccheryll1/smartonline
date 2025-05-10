<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartOnline - Time Management</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Feather Icons CDN -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body class="bg-gray-50 font-sans">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-3 shadow-md">
        <div class="container mx-auto flex items-center justify-between px-6">
            <div class="flex items-center space-x-4">
                <span class="text-xl font-bold text-shadow-sm">LOGO</span>
                <span class="text-lg text-shadow-sm">Time Management</span>
            </div>
            <nav class="flex justify-center space-x-6">
                <a href="{{ route('absensi.index') }}" class="{{ request()->routeIs('absensi.index') ? 'bg-white text-blue-900' : '' }} px-4 py-1 transition duration-200 hover:bg-white hover:text-blue-900">Absensi</a>
                <a href="#" class="{{ request()->is('employee') ? 'bg-white text-blue-900' : '' }} px-4 py-1 transition duration-200 hover:bg-white hover:text-blue-900">Employee</a>
                <a href="#" class="{{ request()->is('lokasi') ? 'bg-white text-blue-900' : '' }} px-4 py-1 transition duration-200 hover:bg-white hover:text-blue-900">Lokasi</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-6 px-6">
        @yield('content')
    </main>

    <!-- Inisialisasi Feather Icons -->
    <script>
        feather.replace();
    </script>
</body>
</html>