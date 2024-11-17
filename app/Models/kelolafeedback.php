<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback'; // Nama tabel
    protected $primaryKey = 'id'; // Primary Key

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_pengguna',
        'email',
        'pesan',
        'tanggal_masukan',
        'status_baca',
    ];

    // Mengatur tipe data untuk kolom tertentu
    protected $casts = [
        'tanggal_masukan' => 'datetime',
        'status_baca' => 'boolean',
    ];
}
