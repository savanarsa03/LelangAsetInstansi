<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashsewa extends Model
{
    use HasFactory;
    protected $fillable=['nama_barang','deskripsi','alamat','image'];
    // protected $table = 'dashsewa';
}
