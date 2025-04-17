<?php

namespace App\Http\Controllers;

use App\Models\pemilik;
use Illuminate\Http\Request;

class pemilikcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = pemilik::get();
        return view('pemilik.tampilpemilik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('pemilik.tambahpemilik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menyimpan
        $data = new pemilik();
        $data->nm_pemilik = $request->nm_pemilik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $post = $data->save();
        return redirect('pemilik');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = pemilik::where('id', '=', $id)->get();
        return view('pemilik.updatepemilik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = pemilik::where('id', '=', $id);
        $data->update([
            'nm_pemilik' => $request->nm_pemilik,
            'tgl_lahir'=> $request->tgl_lahir,
            'alamat'=> $request->alamat,
            'nik'=> $request->nik,
            'no_hp'=> $request->no_hp,
        ]);
        return redirect('pemilik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = pemilik::where('id', '=', $id);
        $data->delete();
        return redirect('pemilik');
    }
}