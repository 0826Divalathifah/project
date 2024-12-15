<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan oleh model ini
    protected $table = 'homepage';  // Nama tabel yang benar

    // Tentukan kolom yang bisa diisi secara mass-assignment
    protected $fillable = [
        'desa_name',
        'gambar_banner',
        'deskripsi_index',
        'deskripsi',
        'gambar_welcome',
    ];

    // Menentukan kolom yang harus dianggap sebagai timestamp
    public $timestamps = true;

    // Jika Anda tidak ingin menggunakan timestamp secara otomatis, set ke false
    // public $timestamps = false;
}