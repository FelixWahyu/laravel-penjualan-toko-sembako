<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Edit Kategori') }}
        </h2>
    </x-slot>

    <div class="container">
        <form action="{{ route('admin.kategori.update', $kategoris->id) }}" method="post" enctype="multipart/form-data"
            class="col-md-5 border mx-auto p-3 bg-white shadow-sm rounded">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control" id="nama_kategori" name="nama_kategori"
                    value="{{ old('nama_kategori', $kategoris->nama_kategori) }}" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </form>
    </div>
</x-app-layout>
