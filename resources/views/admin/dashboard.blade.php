<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Dashboard Owner') }}
        </h2>
    </x-slot>

    <div class="">
        <div class="row justify-content-center mb-3">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body text-dark fs-5 text-center">
                        {{ __('Halo, ' . $greeting) }}
                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 p-2 mx-auto">
            <div class="row text-left mb-4">
                <div class="col-md-3">
                    <div class="border rounded shadow-sm p-3 my-1 d-flex bg-white">
                        <span class="my-auto me-4">
                            <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #004bcc;"></i>
                        </span>
                        <div class="ms-2">
                            <p>Total Transaksi</p>
                            <h3>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded shadow-sm p-3 my-1 d-flex bg-white">
                        <span class="my-auto me-4">
                            <i class="fa-solid fa-sack-dollar fa-2xl" style="color: #FFD43B;"></i>
                        </span>
                        <div class="ms-2">
                            <p>Total Pendapatan</p>
                            <h3>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded shadow-sm p-3 my-1 d-flex bg-white">
                        <span class="my-auto me-4">
                            <i class="fa-solid fa-hand-holding-dollar fa-2xl" style="color: #00a80b;"></i>
                        </span>
                        <div class="ms-2">
                            <p>Produk Terjual</p>
                            <h3>0</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded shadow-sm p-3 my-1 d-flex bg-white">
                        <span class="my-auto me-4">
                            <i class="fa-solid fa-users fa-2xl" style="color: #6b00c2;"></i>
                        </span>
                        <div class="ms-2">
                            <p>Total User</p>
                            <h3>0</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grafik & Stok Minim -->
            <div class="row">
                <div class="col-md-9">
                    <h5>Grafik Trend</h5>
                    <canvas id="grafikTrend" height="200"></canvas>
                </div>
                <div class="col-md-3">
                    <h5>Informasi Stok Minim</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between">
                            Item One <span>0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Item Two <span>0</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            Item Three <span>0</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
