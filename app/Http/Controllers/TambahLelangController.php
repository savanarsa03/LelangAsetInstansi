<?php

namespace App\Http\Controllers;

use App\Models\Tambahlelang;
use Illuminate\Http\Request;

class TambahLelangController extends Controller
{
    public function index(){

        //   return view('Dashboard.Lelang.index', [
     // //     "lela"=> Tambahlelang::all()
        //   ]);

        $lelang = \App\Models\Tambahlelang::all();
        return view('Dashboard.Lelang.index', compact('lelang'));

    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('Dashboard.Lelang.index', [
        //     "lela" => Tambahlelang::all()
        // ]);

        $lelang = \App\Models\Tambahlelang::all();
        return view('Dashboard.Lelang.create', compact('lelang'));
        
    }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {

         $lela = new TambahLelangController();
         $lela->nama_barang = request()->input('nama_barang');
         $lela->deskripsi = request()->input('deskripsi');
         $lela->alamat = request()->input('alamat');
         $lela->kategori = request()->input('kategori');
         $lela->image = request()->input('image');
          return redirect('/dashboard/tambah-lelang');

        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'kategori' => 'required',
            'image' => 'image|file|max:1024',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tambahlelang-images');
        }

        TambahLelangController::create($validatedData);

       return redirect('/dashboard/tambah-lelang/index')->with('success', 'Menu berhasil ditambahkan!');
     }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tambahlelang  $Tambahlelang
     * @return \Illuminate\Http\Response
     */
    public function show(Tambahlelang $Tambahlelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\v  $Tambahlelang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tambahlelang $Tambahlelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\$Tambahlelang $Tambahlelang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tambahlelang $Tambahlelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\$Tambahlelang  $Tambahlelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tambahlelang $Tambahlelang)
    {
        //
    }



}
