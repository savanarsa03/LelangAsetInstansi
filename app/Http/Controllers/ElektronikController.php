<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElektronikController extends Controller
{
    public function index(){
        return view ('KategoriLelang.elektronik');
    }
}
