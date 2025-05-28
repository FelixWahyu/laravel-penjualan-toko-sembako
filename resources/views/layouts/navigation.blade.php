<nav class="d-flex vh-100 overflow-hidden">
    <!-- Sidebar -->
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-success shadow-sm border"
        style="width: 250px; height: 100vh; position: sticky; top: 0;">
        @if (Auth::user()->role_user === 'admin')
            <a href="{{ route('admin.dashboard') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none text-dark">
                <x-application-logo class="me-2" style="height: 50px; width: auto;" />
                <span class="fs-5 text-white fw-semibold">TOKO RASIKUN</span>
            </a>
        @else
            <a href="{{ route('dashboard') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none text-dark">
                <x-application-logo class="me-2" style="height: 50px; width: auto;" />
                <span class="fs-5 text-white fw-semibold">TOKO RASIKUN</span>
            </a>
        @endif
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <x-nav-link :href="Auth::user()->role_user === 'admin' ? route('admin.dashboard') : (Auth::user()->role_user === 'donatur' ? route('donatur.dashboard') : route('dashboard'))" :active="Auth::user()->role_user === 'admin' ? request()->routeIs('admin.dashboard') : (Auth::user()->role_user === 'donatur' ? request()->routeIs('donatur.dashboard') : request()->routeIs('dashboard'))">
                <span class="me-2">
                    <i class="fa-solid fa-grip"></i>
                </span>
                {{ __('Dashboard') }}
            </x-nav-link>

            @if (Auth::user()->role_user === 'admin')
                <x-nav-link :href="route('admin.kategori')" :active="request()->routeIs('admin.kategori')">
                    <span class="me-2">
                        <i class="fa-solid fa-layer-group"></i>
                    </span>
                    {{ __('Data Kategori') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.produks')" :active="request()->routeIs('admin.produks')">
                    <span class="me-2">
                        <i class="fa-solid fa-box"></i>
                    </span>
                    {{ __('Data Produks') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                    <span class="me-2">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    {{ __('Data Users') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.penjualan')" :active="request()->routeIs('admin.penjualan')">
                    <span class="me-2">
                        <i class="fa-solid fa-chart-line"></i>
                    </span>
                    {{ __('Laporan Penjualan') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.keuangan')" :active="request()->routeIs('admin.keuangan')">
                    <span class="me-2">
                        <i class="fa-solid fa-book"></i>
                    </span>
                    {{ __('Laporan Keuangan') }}
                </x-nav-link>
            @endif

            @if (Auth::user()->role_user === 'donatur')
                <x-nav-link :href="route('admin.pengajuan')" :active="request()->routeIs('admin.pengajuan')">
                    <span class="me-2">
                        <i class="fa-solid fa-layer-group"></i>
                    </span>
                    {{ __('Data Pengajuan') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.penerima')" :active="request()->routeIs('admin.penerima')">
                    <span class="me-2">
                        <i class="fa-solid fa-user-graduate"></i>
                    </span>
                    {{ __('Data Penerima') }}
                </x-nav-link>
                <x-nav-link :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                    <span class="me-2">
                        <i class="fa-solid fa-users"></i>
                    </span>
                    {{ __('Laporan Transaksi') }}
                </x-nav-link>
            @endif

            @if (Auth::user()->role_user === 'kasir')
                <x-nav-link :href="route('kasir.transaksi')" :active="request()->routeIs('kasir.transaksi')">
                    <span class="me-2">
                        <i class="fa-solid fa-cash-register"></i>
                    </span>
                    {{ __('Transaksi') }}
                </x-nav-link>
                <x-nav-link :href="route('kasir.riwayatTransaksi')" :active="request()->routeIs('kasir.riwayatTransaksi')">
                    <span class="me-2">
                        <i class="fa-solid fa-file-invoice"></i>
                    </span>
                    {{ __('Riwayat transaksi') }}
                </x-nav-link>
                <x-nav-link :href="route('kasir.allProduk')" :active="request()->routeIs('kasir.allProduk')">
                    <span class="me-2">
                        <i class="fa-solid fa-list"></i>
                    </span>
                    {{ __('Daftar Produk') }}
                </x-nav-link>
            @endif
        </ul>
    </div>

    <!-- Main content & Top Navbar -->
    <div class="flex-grow-1 d-flex flex-column" style="height: 100vh; overflow: hidden;">
        <!-- Sticky Top Navbar -->
        <nav class="navbar navbar-expand navbar-light py-3 px-2 bg-white border-bottom"
            style="position: sticky; top: 0; z-index: 1030;">
            <div class="container-fluid p-2">
                <button class="btn btn-light me-2" id="sidebarToggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <i class="fa-solid fa-circle-user fa-lg"></i>
                        {{ Auth::user()->name }}
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </nav>

        <!-- Page Heading (optional) -->
        @isset($header)
            <header class="bg-white shadow-sm">
                <div class="px-5 py-2">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content Scrollable -->
        <main class="p-3 mt-4 overflow-auto" style="flex-grow: 1;">
            {{ $slot }}
        </main>
    </div>
</nav>


{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}
