<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Impor Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <!-- Font Awesome untuk ikon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Styling global */
        body {
            background-color: #f5f7fa;
            font-family: 'Roboto', sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #2563eb; /* Biru yang sama seperti tema sebelumnya */
        }
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
        .navbar-nav {
            gap: 15px;
        }
        @media (max-width: 991px) {
            .navbar-collapse {
                position: static !important;
                transform: none !important;
            }
        }

        /* Summary Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            background-color: #fff;
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-body h6 {
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 0.5rem;
        }
        .card-body h3 {
            font-size: 1.8rem;
            color: #343a40;
        }
        .card-body small {
            color: #adb5bd;
        }

        /* Filter Section */
        .filter-section {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        .filter-section .form-control {
            border: 1px solid #e9ecef;
            border-radius: 6px;
            padding: 8px 12px;
        }
        .filter-section .btn-outline-secondary {
            border-radius: 6px;
            padding: 8px 12px;
        }

        /* Tabel */
        .table-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }
        .table {
            margin-bottom: 0;
        }
        .table th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
            text-transform: uppercase;
            font-size: 0.85rem;
            color: #6c757d;
            padding: 12px;
        }
        .table tbody td {
            padding: 12px;
            vertical-align: middle;
            border-bottom: 1px solid #e9ecef;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f3f5;
        }
        .rounded-circle {
            width: 30px;
            height: 30px;
        }

        /* Tombol Edit dan Delete */
        .btn-warning, .btn-danger {
            border-radius: 6px;
            padding: 6px 12px;
            font-size: 0.85rem;
            transition: all 0.2s ease-in-out;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #212529;
        }
        .btn-warning:hover {
            background-color: #ffca2c;
            border-color: #ffca2c;
            color: #212529;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #e04b59;
            border-color: #e04b59;
        }

        /* Tombol Add Attendance */
        .btn-primary {
            border-radius: 6px;
            padding: 8px 16px;
            font-weight: 500;
            background-color: #2563eb;
        }
        .btn-primary:hover {
            background-color: #1d4ed8;
            border-color: #1d4ed8;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark position-relative">
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