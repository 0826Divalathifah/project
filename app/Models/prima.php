<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prima extends Model
{
    use HasFactory;

    protected $table = 'prima';

    protected $primaryKey = 'id_produk';

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
        'varian',
    ];

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
        // Pastikan nilai asli tetap disimpan di database sebagai angka (misalnya 10000),
        // tetapi tampilannya diformat saat diambil
        return 'Rp ' . number_format($value, 0, ',', '.'); // Format ke "Rp 10.000"
    }

    // Jika Anda ingin mengatur akses untuk menyimpan harga dengan format tertentu
    public function setHargaProdukAttribute($value)
    {
        // Menghapus titik untuk menyimpan harga sebagai angka asli tanpa format
        $this->attributes['harga_produk'] = str_replace('.', '', $value);
    }

    public function show($id)
    {
        $produk = Prima::with(['varia_prima', 'foto_produk'])->findOrFail($id);
        return view('detail_produk', compact('produk'));
    }

    public function varianPrima()
    {
        return $this->hasMany(VarianPrima::class, 'id_produk'); // id_produk adalah foreign key di tabel varian_prima
    }
}
