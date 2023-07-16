<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashsewa;

class DashboardSewaController extends Controller
{
    // public function index(){

    //     //   return view('Dashboard.Lelang.index', [
    //  // //     "lela"=> Tambahlelang::all()
    //     //   ]);

    //     // $dashsewa = \App\Models\Dashsewa::all();
    //     // return view('Dashboard.sewa.index');

    //     // $dashsewas = \App\Models\Dashsewa::all();
    //     // return view('/dashboard/sewa/index');
    //     $dashsewas = \App\Models\Dashsewa::all();
    //     return view('/dashboard/sewa/index',compact('dashsewa'));

    // }

    // /**
    //  * Show the form for creating a new resource.
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     // return view('Dashboard.Lelang.index', [
    //     //     "lela" => Tambahlelang::all()
    //     // ]);

    //     $dashsewa = \App\Models\Dashsewa::all();
    //     return view('Dashboard.sewa.create');
        
    // }

    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sewa.index', [
            "dashsewa" => Dashsewa::all()
        ]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sewa.create', [
            "dashsewa" => Dashsewa::all()
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

        //  $sewa = new TambahLelangController();
        //  $sewa->nama_barang = request()->input('nama_barang');
        //  $sewa->deskripsi = request()->input('deskripsi');
        //  $sewa->alamat = request()->input('alamat');
        //  $sewa->image = request()->input('image');
        //   return redirect('/dashboard/tambah-sewa');

        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'deskripsi' => 'required',
            'alamat' => 'required',
            'image' => 'image|file|max:1024',
        ]); 

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('tambahsewa-images');
        }

        DashboardSewaController::create($validatedData);

         return redirect('/dashboard/tambah-sewa')->with('success', 'Menu berhasil ditambahkan!');
     }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dashsewa  $Dashsewa
     * @return \Illuminate\Http\Response
     */
    public function show(Dashsewa $Dashsewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\v  $Dashsewa
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashsewa $Dashsewa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\$Dashsewa  $Dashsewa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashsewa $Dashsewa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\$Dashsewa  $Dashsewa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashsewa $Dashsewa)
    {
        //
    }


}
