<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoreelektronikController extends Controller
{
    public function index(){
        return view ('more.moreelektronik');
    }
}
