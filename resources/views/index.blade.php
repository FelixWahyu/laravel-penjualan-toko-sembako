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
    <header
        class="px-3 py-3 border-bottom shadow-sm d-flex justify-content-between align-items-center fixed-top bg-white bg-opacity-75">
        <a href="index.html" class="d-flex align-items-center text-decoration-none" id="site-logo-inner">
            {{-- <img class="img-fluid" id="logo_header" alt="logo-stikom" src="{{ asset('images/logo/logo.png') }}"
                data-light="{{ asset('images/logo/logo.png') }}" data-dark="{{ asset('images/logo/logo.png') }}"
                style="max-height: 60px; width: auto;"> --}}
            <span class="fw-semibold fs-4 ms-2 text-dark">TOKO RASIKUN</span>
        </a>
        <div class="d-flex justify-content-between align-items-center gap-3">
            <a href="#" class="text-dark text-decoration-none fw-semibold">Beranda</a>
            <a href="#" class="text-dark text-decoration-none fw-semibold">Tentang Kami</a>
            <a href="#" class="text-dark text-decoration-none fw-semibold">Produk</a>
        </div>
        @if (Route::has('login'))
            <nav class="d-flex align-items-center justify-content-end gap-3">
                @auth
                    <a href="{{ Auth::user()->role_user === 'admin' ? url('/admin') : (Auth::user()->role_user === 'superAdmin' ? url('/superAdmin') : url('/kasir')) }}"
                        class="btn btn-outline-primary">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary fw-semibold">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-primary fw-semibold">Register</a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class=""
        style="background-image: url('{{ asset('images/logo/logo.png') }}'); background-size: cover; background-position: center; height: 100vh;">
        {{-- <main class="text-center">
            <div class="row justify-content-center align-middle">
                <div class="col-md-8 col-lg-6 p-5 bg-white shadow rounded">
                    <h1 class="display-4 fw-semibold">Selamat Datang</h1>
                    <p class="lead fw-medium mt-3">Sistem Informasi Penjualan TOKO RASIKUN</p>
                </div>
            </div>
        </main> --}}
    </div>

    @if (Route::has('login'))
        <div class="py-5 d-none d-lg-block"></div>
    @endif

</body>

</html>
