<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/ca9af5e3fc.js" crossorigin="anonymous"></script>

    <title>Landing Page</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="body">
    <header class="px-3 py-3 border-bottom shadow-sm d-flex justify-content-between align-items-center bg-success">
        <a href="index.html" class="d-flex align-items-center text-decoration-none" id="site-logo-inner">
            <img class="img-fluid" id="logo_header" alt="logo-stikom" src="{{ asset('images/logo/logo.png') }}"
                data-light="{{ asset('images/logo/logo.png') }}" data-dark="{{ asset('images/logo/logo.png') }}"
                style="max-height: 60px; width: auto;">
            <span class="fw-semibold fs-4 ms-2 text-light">TOKO RASIKUN</span>
        </a>
        @if (Route::has('login'))
            <nav class="d-flex align-items-center justify-content-end gap-3">
                @auth
                    <a href="{{ Auth::user()->role_user === 'admin' ? url('/admin') : (Auth::user()->role_user === 'donatur' ? url('/donatur') : url('/kasir')) }}"
                        class="btn btn-outline-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary fw-semibold">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-light fw-semibold">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <main class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 p-5 bg-white shadow rounded">
                    <h1 class="display-4 fw-semibold">Selamat Datang</h1>
                    <p class="lead fw-medium mt-3">Sistem Informasi Penjualan TOKO RASIKUN</p>
                </div>
            </div>
        </main>
    </div>

    @if (Route::has('login'))
        <div class="py-5 d-none d-lg-block"></div>
    @endif

</body>

</html>
