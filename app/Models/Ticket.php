<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'tanggal',
        'lokasi',
        'harga',
        'stock',
        'stok',
        'stok_awal',
        'status',
        'kategori',
        'buyer_name',
        'buyer_email',
        'buyer_phone',
        'buyer_ktp',
        'is_paid',
        'checkout_at',
        'kode_unik',
        'user_id'
    ];

    protected $casts = [
        'checkout_at' => 'datetime',
        'tanggal' => 'datetime',
        'is_paid' => 'boolean'
    ];


// Accessor untuk format harga
public function getHargaFormattedAttribute()
{
    return 'Rp ' . number_format($this->harga, 0, ',', '.');
}

// Scope untuk konser mendatang
public function scopeUpcoming($query)
{
    return $query->where('tanggal', '>=', now());
}
}
