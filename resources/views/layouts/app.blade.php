<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Management</title>
    <!-- Impor Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Impor Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ['Montserrat', 'sans-serif'],
                        roboto: ['Roboto', 'sans-serif'],
                    },
                },
            },
        };
    </script>
</head>
<body class="bg-gray-100 font-roboto">
    <!-- Navbar -->
    <nav class="bg-blue-600 text-white relative">
        <div class="container mx-auto flex items-center justify-between py-4 px-4 lg:px-0">
            <!-- Logo -->
            <a href="#" class="text-xl font-bold">
                <span class="font-montserrat font-bold">LOGO</span>
                <span class="font-roboto">Time Management</span>
            </a>

            <!-- Toggler untuk mobile -->
            <button class="lg:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Menu -->
            <div class="hidden lg:flex absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2" id="navbarNav">
                <ul class="flex gap-6">
                    <li>
                        <a href="/attendances" class="text-white hover:text-gray-200 font-medium">Absensi</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-200 font-medium">Employee</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-200 font-medium">Lokasi</a>
                    </li>
                </ul>
            </div>
            <!-- Menu Mobile -->
            <div class="lg:hidden hidden flex-col absolute top-full left-0 w-full bg-blue-600 p-4" id="navbarNav">
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="/attendances" class="text-white hover:text-gray-200 font-medium">Absensi</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-200 font-medium">Employee</a>
                    </li>
                    <li>
                        <a href="#" class="text-white hover:text-gray-200 font-medium">Lokasi</a>
                    </li>
                </ul>
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

    <!-- Bootstrap JS (untuk toggler mobile) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>