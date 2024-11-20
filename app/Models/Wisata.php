<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'wisata';

    // Kolom yang dapat diisi
    protected $fillable = [
        'nama_wisata',
        'waktu_kunjung',
        'alamat',
        'harga_masuk',
        'link_google_maps',        
        'deskripsi',
        'foto_card',
        'brosur',
        'foto_wisata',
    ];

    // Cast foto_wisata sebagai array
    protected $casts = [
        'foto_wisata' => 'array',
    ];

    // Timestamp diaktifkan
    public $timestamps = true;
}
