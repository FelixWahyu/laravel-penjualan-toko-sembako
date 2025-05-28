<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Laporan Penjualan') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body text-dark">
                        {{ __('Daftar laporan penjualan') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
