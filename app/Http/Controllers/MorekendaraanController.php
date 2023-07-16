<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MorekendaraanController extends Controller
{
    public function index(){
        return view ('more.morekendaraan');
    }
}
