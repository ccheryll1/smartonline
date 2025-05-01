<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Impor Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">

    {{-- tailwind v4 css CDN --}}
    <script src="https://cdn.tailwindcss.com/4.0.0-alpha.1"></script>
    <style>
        .card {
            border-radius: 10px;
        }
        .table th {
            background-color: #f8f9fa;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }
        .rounded-circle {
            width: 30px;
            height: 30px;
        }
        /* Styling untuk logo di navbar */
        .navbar-brand {
            font-size: 1.5rem;
        }
        .navbar-brand .logo {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        .navbar-brand .time-management {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }
        /* Pastikan menu di tengah tetap rapi */
        .navbar-nav {
            gap: 15px; /* Jarak antar menu */
        }
        @media (max-width: 991px) {
            /* Atur posisi menu di mobile */
            .navbar-collapse {
                position: static !important;
                transform: none !important;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary position-relative">
        <div class="container-fluid">
            <!-- Logo tetap normal di kiri -->
            <a class="navbar-brand" href="#">
                <span class="logo">LOGO</span> <span class="time-management">Time Management</span>
            </a>

            <!-- Toggler untuk mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu dibuat absolute tengah -->
            <div class="collapse navbar-collapse justify-content-center position-absolute top-50 start-50 translate-middle" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="/attendances">Absensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Lokasi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h3>Absensi</h3>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>