<?php

namespace App\Http\Controllers;

use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = service::get();
        return view('service.tampilService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('service.tambahService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menyimpan
        $data = new service();
        $data->keluhan = $request->keluhan;
        $data->tgl_masuk = $request->tgl_masuk;
        $data->tgl_keluar = $request->tgl_keluar;
        $post = $data->save();
        return redirect('service');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = service::where('id', '=', $id)->get();
        return view('service.updateService', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = service::where('id', '=', $id);
        $data->update([
            'keluhan' => $request->keluhan,
            'tgl_masuk'=> $request->tgl_masuk,
            'tgl_keluar'=> $request->tgl_keluar,
        ]);
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = service::where('id', '=', $id);
        $data->delete();
        return redirect('service');
    }
}