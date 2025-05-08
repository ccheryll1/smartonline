<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartOnline - Time Management</title>
    <script src="https://cdn.tailwindcss.com/4.1.5"></script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Header -->
    <header class="bg-blue-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="flex items-center space-x-4">
                <span class="text-xl font-bold text-shadow-sm">LOGO</span>
                <span class="text-lg text-shadow-sm">Time Management</span>
            </div>
            <nav class="space-x-4">
                <a href="{{ route('absensi.index') }}" class="px-4 py-2 bg-blue-700 rounded hover:bg-blue-600">Absensi</a>
                <a href="#" class="px-4 py-2 hover:bg-blue-700 rounded">Employee</a>
                <a href="#" class="px-4 py-2 hover:bg-blue-700 rounded">Lokasi</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto mt-6 px-4">
        @yield('content')
    </main>
</body>
</html>