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
                        <h6 class="m-0 font-weight-bold text-dark">Form Tambah Produk</h6>
                    </div>
                </div>
            </div>
            <form action="{{ route('admin.kategori.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="kategoriId" class="form-label">Nama Kategori</label>
                                <select name="kategori_id" id="kategoriId"
                                    class="form-control @error('kategori') is-invalid @enderror">

                                    <option value="">--Pilih Kategori--</option>
                                    @foreach ($categories as $item)
                                        <option value="{{ $item->id }}"
                                            @if (old('kategori_id') == $item->id) selected @endif>{{ $item->nama_kategori }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <small class="invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>

                            <img class="img-thumbnail" src="{{ asset('defaultImg/default.jpg') }}" alt=""
                                id="output">
                            <input type="file" name="gambar"
                                class="form-control mt-1 @error('gambar') is-invalid @enderror"
                                onchange="loadFile(event)">

                            @error('gambar')
                                <small class="invalid-feedback">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="nama_produk" class="form-label">Nama Produk</label>
                                        <input type="text" name="nama_produk"
                                            class="form-control @error('nama_produk') is-invalid @enderror"
                                            id="nama_produk" placeholder="Nama..." value="{{ old('nama_produk') }}">
                                        @error('nama_produk')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="harga_jual" class="form-label">Harga Jual</label>
                                        <input type="number" name="harga_jual"
                                            class="form-control @error('harga_jual') is-invalid @enderror"
                                            id="harga_jual" placeholder="Harga..." value="{{ old('harga_jual') }}">
                                        @error('harga_jual')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="mb-3">
                                        <label for="harga_beli" class="form-label">Harga Beli</label>
                                        <input type="number" name="harga_beli"
                                            class="form-control @error('harga_beli') is-invalid @enderror"
                                            id="harga_beli" placeholder="Harga..." value="{{ old('harga_beli') }}">
                                        @error('harga_beli')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="stokId" class="form-label">Jumlah</label>
                                        <input type="number" name="stok"
                                            class="form-control @error('stok') is-invalid @enderror" id="stokId"
                                            placeholder="Jumlah..." value="{{ old('stok') }}">
                                        @error('stok')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="deskripsiId" class="form-label">Deskripsi</label>
                                        <textarea name="deskripsi" cols="30" rows="5" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                                        @error('deskripsi')
                                            <small class="invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" value="Simpan" class="btn btn-primary w-100">
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('admin.produks') }}" class="btn btn-secondary w-100">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <form action="{{ route('admin.kategori.store') }}" method="post" enctype="multipart/form-data"
            class="col-md-5 border mx-auto p-3 bg-white shadow-sm rounded">
            @csrf
            <div class="mb-3">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" class="form-control" id="kode_produk" name="kode_produk" autocomplete="off"
                    required>
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" autocomplete="off"
                    required>
            </div>
            <div class="mb-3">
                <label for="nama_kategori" class="form-label">Kategori</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="number" class="form-control" id="harga_beli" name="harga_beli" autocomplete="off"
                    required>
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="number" class="form-control" id="harga_jual" name="harga_jual" autocomplete="off"
                    required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" autocomplete="off"
                    required>
            </div>
            <button type="submit" class="btn btn-primary my-3" name="submit">Simpan</button>
        </form>
    </div>

    <script>
        function loadFile(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }
    </script>
</x-app-layout>
