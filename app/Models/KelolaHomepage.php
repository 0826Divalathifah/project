<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KelolaHomepage extends Model
{
    // Tabel yang digunakan
    protected $table = 'kelola_homepage';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama_menu',
        'banner_image',
        'deskripsi',
        'slider_images',
    ];

    // Kolom slider_images disimpan sebagai array (JSON)
    protected $casts = [
        'slider_images' => 'array',
    ];
}
