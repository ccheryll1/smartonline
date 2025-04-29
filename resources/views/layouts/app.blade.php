<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-light border-end" style="width: 250px; min-height: 100vh;">
            <div class="p-3">
                <h4>LOGO TIME MANAGEMENT</h4>
                <hr>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/attendances" class="nav-link active">Attendance</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Overtime</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Picture</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Location</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Notes</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid">
                    <span class="navbar-brand">Absensi</span>
                </div>
            </nav>
            <div class="container mt-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>