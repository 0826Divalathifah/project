<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preneur extends Model
{
    use HasFactory;

    protected $table = 'preneur';

    protected $primaryKey = 'id_produk';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'kategori_produk',
        'nama_produk',
        'deskripsi',
        'harga_produk',
        'nomor_whatsapp',
        'foto_card',
        'foto_produk', // Menyimpan path gambar produk dalam format JSON
    ];

    // Relasi dengan tabel VarianPreneur
    public function varians()
    {
        return $this->hasMany(VarianPreneur::class, 'id_produk');
    }

    // Mutator untuk menyimpan array sebagai JSON
    protected function setFotoProdukAttribute($value)
    {
        $this->attributes['foto_produk'] = json_encode($value);
    }

    // Accessor untuk mendapatkan data JSON sebagai array
    protected function getFotoProdukAttribute($value)
    {
        return json_decode($value, true) ?? [];
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
}
