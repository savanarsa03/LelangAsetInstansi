<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Http\Request;

class DashboardPesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.peserta.index',[
            "peserta" => Peserta::all()
        ]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //method tambah pesanan
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'inputnama4' => 'required',
            'inputNIK' => 'required',
            'inputEmail4' => 'required',
            'nomor-hp' => 'required',
            'inputAddress' => 'required',
            'jenis-rekening' => 'required',
            'nomor-rekening' => 'required',
        ]);

        return redirect('/peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peserta  $pesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }
}