<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKelurahan extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'username',
        'email',
        'nomor_telepon',
        'peran',
        'password',
        'alamat',
        'foto_profil',
        'status_aktif',
    ];

    protected $hidden = [
        'password',
    ];
}
