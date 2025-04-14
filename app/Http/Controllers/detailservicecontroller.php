<?php

namespace App\Http\Controllers;

use App\Models\detail_service;
use App\Models\service;
use Illuminate\Http\Request;

class detailservicecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = detail_service::get();
        return view('detailservice.tampildetailService', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //untuk menampilkan form
        return view('detailservice.tambahdetailService');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //untuk menyimpan
        $data = new service();
        $data->sparepart = $request->sparepart;
        $data->harga = $request->harga;
        $post = $data->save();
        return redirect('detailservice');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = detail_service::where('id', '=', $id)->get();
        return view('detailservice.updatedetailservice', compact('data', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data = service::where('id', '=', $id);
        $data->update([
            'sparepart' => $request->sparepart,
            'harga'=> $request->harga,
        ]);
        return redirect('service');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data = detail_service::where('id', '=', $id);
        $data->delete();
        return redirect('detailservice');
    }
}