<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold text-dark fs-4">
            {{ __('Daftar Akun Pengguna') }}
        </h2>
    </x-slot>

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
