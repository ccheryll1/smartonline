<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Management</title>
    <!-- Impor Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Impor Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-['Roboto']">
    <!-- Navbar -->
    <nav class="bg-blue-900 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-4 lg:px-0">
            <!-- Logo -->
            <a href="#" class="text-xl font-bold">
                <span class="font-['Montserrat'] font-bold">LOGO</span>
                <span class="font-['Roboto']">Time Management</span>
            </a>

            <!-- Menu -->
            <div class="flex gap-6">
                <a href="/attendances" class="bg-blue-600 text-white px-4 py-2 rounded-lg font-medium">Absensi</a>
                <a href="#" class="text-white hover:text-gray-200 font-medium">Employee</a>
                <a href="#" class="text-white hover:text-gray-200 font-medium">Lokasi</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto mt-6">
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>

    <!-- Bootstrap JS (untuk toggler mobile, meskipun tidak digunakan di desain ini) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>