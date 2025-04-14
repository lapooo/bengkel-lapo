<?php

namespace App\Http\Controllers;

use App\Models\jns_service;
use Illuminate\Http\Request;

class jnsservicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = jns_service::get();
        return view('jnsService.tampiljnsservice', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('jnsService.tambahJnsService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menyimpan
        $data = new jns_service();
        $data->jns_service = $request->jns_service;
        $data->keterangan = $request->keterangan;
        $post = $data->save();
        return redirect('jnsservice');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = jns_service::where('id', '=', $id)->get();
        return view('jnsService.updatejnsservice', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = jns_service::where('id', '=', $id);
        $data->update([
            'jns_service'=> $request->jns_service,
            'keterangan'=> $request->keterangan,
        ]);
        return redirect('jnsservice');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = jns_service::where('id', '=', $id);
        $data->delete();
        return redirect('jnsservice');
    }
}