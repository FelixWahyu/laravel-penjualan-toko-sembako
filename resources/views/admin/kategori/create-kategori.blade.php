<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Tambah Kategori') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card shadow mb-4 col">
            <div class="card-header py-3">
                <div class="">
                    <div class="">
                        <h6 class="m-0 font-weight-bold text-dark">Form Tambah Kategori</h6>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.kategori.store') }}" method="post" enctype="multipart/form-data"
                class="">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                            autocomplete="off" placeholder="Nama..." required>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary me-2" name="submit">Simpan</button>
                        <a href="{{ route('admin.kategori') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
