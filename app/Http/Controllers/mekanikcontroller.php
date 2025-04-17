<?php

namespace App\Http\Controllers;

use App\Models\mekanik;
use Illuminate\Http\Request;

class mekanikcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = mekanik::get();
        return view('mekanik.tampilmekanik', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('mekanik.tambahmekanik');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menyimpan
        $data = new mekanik();
        $data->nm_mekanik = $request->nm_mekanik;
        $data->tgl_lahir = $request->tgl_lahir;
        $data->alamat = $request->alamat;
        $data->nik = $request->nik;
        $data->no_hp = $request->no_hp;
        $post = $data->save();
        return redirect('mekanik');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = mekanik::where('id', '=', $id)->get();
        return view('mekanik.updatemekanik', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = mekanik::where('id', '=', $id);
        $data->update([
            'nm_mekanik' => $request->nm_mekanik,
            'tgl_lahir'=> $request->tgl_lahir,
            'alamat'=> $request->alamat,
            'nik'=> $request->nik,
            'no_hp'=> $request->no_hp,
        ]);
        return redirect('mekanik');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = mekanik::where('id', '=', $id);
        $data->delete();
        return redirect('mekanik');
    }
}