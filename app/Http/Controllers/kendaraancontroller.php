<?php

namespace App\Http\Controllers;

use App\Models\kendaraan;
use Illuminate\Http\Request;

class kendaraancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = kendaraan::get();
        return view('kendaraan.tampilkendaraan', compact('data'));
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
        $data->nopol=$request->nopol;
        $data->thn_kendaraan=$request->thn_kendaraan;
        $data->no_mesin=$request->no_mesin;
        $data->no_rangka=$request->no_rangka;
        $data->kapasitas_mesin=$request->kapasitas_mesin;
        $data->transmisi=$request->transmisi;
        $post = $data->save();
        return redirect('kendaraan');
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
            'nopol' => $request->nopol,
            'no_mesin' => $request->no_mesin,
            'no_rangka' => $request->no_rangka,
            'kapasitas' => $request->kapasitas,
            'transmisi' => $request->transmisi,
            
            
        ]);
        return redirect('kendaraan');
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