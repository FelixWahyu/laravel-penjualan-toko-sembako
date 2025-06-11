<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="bg-light text-dark">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center pt-4">
        <div class="mb-3">
            <a href="/">
                {{-- <x-application-logo class="" style="width: 100px; height: 100px; color: gray;" /> --}}
            </a>
        </div>
        <h3>TOKO RASIKUN</h3>

        <div class="w-100 p-3 bg-white shadow rounded" style="max-width: 400px;">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
