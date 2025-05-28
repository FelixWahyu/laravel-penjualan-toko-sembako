<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\Kasir\MahasiswaController;
use App\Http\Controllers\Kasir\TransaksiController;
use App\Http\Controllers\ProfileController;
use App\Models\Kategori;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth', 'verified', 'kasir'])->group(function () {
    Route::get('/kasir', [MahasiswaController::class, 'index'])->name('dashboard');
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('kasir.transaksi');
    Route::get('/riwayat', [MahasiswaController::class, 'riwayat'])->name('kasir.riwayatTransaksi');
    Route::get('/all-Produk', [MahasiswaController::class, 'listProduk'])->name('kasir.allProduk');
});

// Route::middleware(['auth', 'verified', 'donatur'])->group(function () {
//     Route::get('/donatur', [DonaturController::class, 'index'])->name('donatur.dashboard');
// });

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::get('/owner', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/kategori', [KategoriController::class, 'index'])->name('admin.kategori');
    Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('admin.kategori.tambah');
    Route::post('/kategori/store', [KategoriController::class, 'store'])->name('admin.kategori.store');
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/kategori/update/{id}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::delete('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.delete');

    Route::get('/produks', [ProdukController::class, 'index'])->name('admin.produks');
    Route::get('/produks/tambah', [ProdukController::class, 'create'])->name('admin.produks.tambah');
    Route::post('/produks/store', [ProdukController::class, 'store'])->name('admin.produks.store');
    Route::get('/produks/edit/{id}', [ProdukController::class, 'edit'])->name('admin.produks.edit');
    Route::put('/produks/update/{id}', [ProdukController::class, 'update'])->name('admin.produks.update');
    Route::delete('/produks/delete/{id}', [ProdukController::class, 'destroy'])->name('admin.produks.delete');

    Route::get('/users', [AdminController::class, 'laporanPenjualan'])->name('admin.penjualan');

    Route::get('/laporan-penjualan', [AdminController::class, 'laporanKeuangan'])->name('admin.keuangan');
    Route::get('/laporan-keuangan', [AdminController::class, 'allUser'])->name('admin.users');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
