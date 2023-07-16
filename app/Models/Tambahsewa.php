<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahsewa extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'deskripsi', 'alamat', 'kategori', 'image'];
}
