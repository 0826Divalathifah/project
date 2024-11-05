<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda'; // Nama tabel di database

    protected $fillable = [
        'nama_acara',
        'tanggal_acara',
        'deskripsi_acara',
        'alamat', // Kolom 'alamat' sudah ditambahkan
    ];
}