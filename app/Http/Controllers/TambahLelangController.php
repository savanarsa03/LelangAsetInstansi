<?php

namespace App\Http\Controllers;

use App\Models\Tambahlelang;
use Illuminate\Http\Request;

class TambahLelangController extends Controller
{
    public function index(){

        return view('Dashboard.Lelang.index', [
            "Lelang" => Tambahlelang::all()
        ]);
    }

    public function create(){
        
        return view('Dashboard.Lelang.create', [
            "Lelang" => Tambahlelang::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'alamat' => 'required|max:255',
            // 'kategori' => 'required',
            // 'image' => 'image|file|max:1024',

        ]);

        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('Tambahlelang-images');
        // }

        Tambahlelang::create($validatedData);

        return redirect('/dashboard/tambah-lelang')->with('success', 'Menu berhasil ditambahkan!');
    }


}
