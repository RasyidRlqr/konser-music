<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Konser Musik')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar-custom {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .nav-link {
            color: #007bff;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background-color: #007bff;
            left: 0;
            bottom: 0;
            transition: width 0.3s ease-in-out;
        }
        .nav-link:hover::after {
            width: 100%;
        }
        .btn-animate {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        .btn-animate::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 100%;
            background-color: #007bff;
            top: 0;
            left: -100%;
            z-index: -1;
            transition: left 0.4s;
        }
        .btn-animate:hover::before {
            left: 0;
        }
        .btn-animate:hover {
            color: white;
        }
        footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            margin-top: 100px;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <a class="navbar-brand text-primary" href="/">Konser Musik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('konser') }}">Konser</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
            <div class="d-flex">
                @auth
                    <a href="{{ route('profile.show') }}" class="btn btn-outline-primary me-2 btn-animate">Profile</a>
                    @if(auth()->user()->is_admin)
                        <a href="/admin/dashboard" class="btn btn-outline-primary me-2 btn-animate">Dashboard</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-animate">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2 btn-animate">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-animate">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<main class="py-4">
    @yield('content')
</main>

<footer>
    <p>&copy; 2025 Konser Musik. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
