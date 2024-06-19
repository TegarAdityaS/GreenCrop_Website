<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $table = 'tanamans'; // Mendefinisikan tabel yang digunakan oleh model ini
    protected $primaryKey = 'id_tanaman';

    protected $fillable = [
        'nama_tanaman',
        'gambar_tanaman',
        'deskripsi'
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_tanaman'); // Definisi relasi one-to-many dengan model Produk
    }
}
