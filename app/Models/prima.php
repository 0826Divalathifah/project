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
        'foto_produk', // Untuk menyimpan path gambar produk dalam format JSON
    ];

    // Mutator untuk menyimpan array sebagai JSON
    protected function setFotoProdukAttribute($value)
    {
        $this->attributes['foto_produk'] = json_encode($value);
    }

    // Accessor untuk mendapatkan data JSON sebagai array
    public function getFotoProdukAttribute($value)
    {
        return is_array(json_decode($value, true)) ? json_decode($value, true) : [];
    }

    // Accessor untuk memformat harga
    public function getHargaProdukAttribute($value)
    {
        return 'Rp ' . number_format($value, 0, ',', '.');
    }

    public function setHargaProdukAttribute($value)
    {
        $this->attributes['harga_produk'] = str_replace('.', '', $value);
    }

    // Sesuaikan foreign key 'id_produk' menjadi 'id'
}
