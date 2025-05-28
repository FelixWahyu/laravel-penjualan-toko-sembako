<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Daftar Kategori') }}
        </h2>
    </x-slot>

    <div class="mx-3">
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <a href="{{ route('admin.kategori.tambah') }}" class="btn btn-primary mb-2 shadow-sm">
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
            <table class="table table-hover border shadow-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kategoris as $kategori)
                        <tr>
                            <th>{{ $kategoris->firstItem() + $loop->index }}</th>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>
                                <a href="{{ route('admin.kategori.edit', $kategori->id) }}"
                                    class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i>
                                    Edit
                                </a>
                                <form action="{{ route('admin.kategori.delete', $kategori->id) }}" method="POST"
                                    class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm btn-delete">
                                        <i class="fa-solid fa-trash-can"></i>
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-danger py-3 bg-danger-subtle">
                                <strong>Data kategori belum tersedia.</strong>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $kategoris->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <script>
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function(e) {
                const form = this.closest('.delete-form');

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data tidak bisa dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
</x-app-layout>
