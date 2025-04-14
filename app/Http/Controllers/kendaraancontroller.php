<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use App\Models\service;
use Illuminate\Http\Request;

class kendaraancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kendaraan::get();
        return view('service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('kendaraan.tambahkendaraan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menyimpan
        $data = new kendaraan();
        $data->id_kendaraan=$request->id_kendaraan;
        $data->id_jns_kendaraan=$request->id_jns_kendaraan;
        $data->id_pemilik=$request->id_pemilik;
        $data->nopol=$request->nopol;
        $data->thn_kendaraan=$request->thn_kendaraan;
        $data->no_mesin=$request->no_mesin;
        $data->no_rangka=$request->no_rangka;
        $data->kapasitas_mesin=$request->kapasitas_mesin;
        $data->transmisi=$request->transmisi;
        $post = $data->save();
        return redirect('service');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = kendaraan::where('id', '=', $id)->get();
        return view('kendaraan.updatekendaraan', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = kendaraan::where('id', '=', $id);
        $data->update([
            'id_kendaraan' => $request->id_kendaraan,
            'id_jns_kendaraan' => $request->id_jns_kendaraan,
            'd_pemilik' => $request->d_pemilik,
            'nopol' => $request->nopol,
            'no_mesin' => $request->no_mesin,
            'no_rangka' => $request->no_rangka,
            'kapasitas' => $request->kapasitas,
            'transmisi' => $request->transmisi,
            
            
        ]);
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = kendaraan::where('id', '=', $id);
        $data->delete();
        return redirect('kendaraan');
    }
}