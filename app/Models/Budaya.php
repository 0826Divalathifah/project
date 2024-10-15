<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budaya extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_budaya',
        'kategori_budaya',
        'nama_budaya',
        'alamat',
        'harga',
        'youtube_link',
        'whatsapp_number',
        'maps_link',
        'deskripsi',
        'foto_card',
        'foto_kebudayaan',
    ];
}
