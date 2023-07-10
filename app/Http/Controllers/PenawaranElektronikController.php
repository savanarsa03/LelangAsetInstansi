<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenawaranElektronikController extends Controller
{
    public function index(){
        return view ('PenawaranLelang.penawaranel');
    }
}