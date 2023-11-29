<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        return view ('databarang',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahbarang()
    {
        return view('tambahbarang');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function insertbarang(Request $request)
    {
        Barang::create($request->all());
        return redirect()->route('databarang')->with('success','Dataa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function tampilbarang($id)
    {
        $data = Barang::find($id);
        //dd($data);

        return view('tampilbarang', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatebarang(Request $request, $id)
    {
        $data = Barang::find($id);
        $data->update($request->all());
        return redirect()->route('databarang')->with('success','Dataa Berhasil update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect()->route('databarang')->with('success','Dataa Berhasil delete');
    }
}
