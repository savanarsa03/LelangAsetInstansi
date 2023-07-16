<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $fillable = ['inputnama4','inputNIK','inputEmail4','nomor-hp','inputAddress','jenis-rekening','nomor-rekening'];
}
