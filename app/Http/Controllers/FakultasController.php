<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = fakultas::all();
        return view("fakultas.index")->with("fakultas", $fakultas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("fakultas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);

       // validasi data input
        $validasi = $request->validate([
            "name" => "required|unique:fakultas"
        ]);
       //simpan data ke tabel fakultas  
       Fakultas::create($validasi);

       return redirect("fakultas")->with("success", "Data fakultas berhasil disimpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fakultas $fakultas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            "nama"=>
            'required'
        ]);
        Fakultas::find($id)->update($validasi);

        return redirect ('fakultas')->with('Data fakultas berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fakultas $fakultas)
    {
        //
    }
}
