<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LelangController extends Controller
{
    public function index(){
        return view ('Bangunan.Lelang');
    }
}
