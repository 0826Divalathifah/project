<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prima extends Model
{
    use HasFactory;

    protected $table = 'prima';
    
    // Ubah primary key ke 'id' sesuai permintaan
    protected $primaryKey = 'id';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'kategori_produk',
        'nama_produk',
        'harga_produk',
        'nomor_whatsapp',
        'deskripsi',
        'foto_card',
        'foto_slider', // Untuk menyimpan path gambar produk dalam format JSON
    ];
    
   

}
