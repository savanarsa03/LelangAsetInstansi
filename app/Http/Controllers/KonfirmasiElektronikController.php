<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonfirmasiElektronikController extends Controller
{
    public function index(){
        return view ('KonfirmasiLelang.konfirmel');
    }
}
