<?php

namespace App\Models;

use App\Https\Controllers\TambahLelangController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahlelang extends Model
{
    use HasFactory;
    // protected $fillable=['nama_barang','deskripsi','alamat','kategori','image'];
    protected $table = 'tambahlelang';

}
