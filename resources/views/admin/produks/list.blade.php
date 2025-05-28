<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Daftar Produks') }}
        </h2>
    </x-slot>

    <div class="mx-3">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <a href="{{ route('admin.produks.tambah') }}" class="btn btn-primary mb-2 shadow-sm">
                    <i class="fa-solid fa-plus"></i>
                    Tambah
                </a>
                <form action="#" method="post">
                    <input class="form-control shadow-sm" type="search" name="search" id="search"
                        placeholder="Search here..." autocomplete="off">
                </form>
            </div>
        </div>

        <div class="overflow-auto">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
</x-app-layout>
