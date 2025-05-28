<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Dashboard Kasir') }}
        </h2>
    </x-slot>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-body text-dark fs-5 text-center">
                        {{ __('Halo, ' . $greeting) }}
                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
