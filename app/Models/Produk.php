<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    protected $fillable = ['nama_produk', 'kategori_id', 'harga_beli', 'harga_jual', 'deskripsi', 'stok', 'gambar'];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
}
