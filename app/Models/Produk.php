<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks'; // Mendefinisikan tabel yang digunakan oleh model ini
    protected $primaryKey = 'id_produk'; // Mendefinisikan primary key tabel

    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'gambar',
        'id_kategori',
        'id_tanaman'
    ]; // Mendefinisikan kolom yang dapat diisi secara massal (mass assignable)

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori'); // Mendefinisikan relasi belongsTo ke model Kategori
    }

    public function tanaman()
    {
        return $this->belongsTo(Tanaman::class, 'id_tanaman'); // Mendefinisikan relasi belongsTo ke model Tanaman
    }
}
