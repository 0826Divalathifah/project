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
    
    // Cast kolom slider_images ke array
    protected $casts = [
        'slider_images' => 'array',
    ];
}