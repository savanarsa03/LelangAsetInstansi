<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TambahsewaController extends Controller
{
    public function index(){
        return view ('Dashboard.tambah-sewa');
    }
}
