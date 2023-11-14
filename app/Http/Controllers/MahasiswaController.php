<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view("mahasiswa.index")->with("mahasiswa", $mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "npm" => "required|unique::mahasiswas",
            "nama" => "required",
            "tempat_lahir" =>"required",
            "tanggal_lahir"=>"required",
            "prodi_id"=>"required",
            "foto"=> "required|image"
        ]);
    // ambil extensi file foto
    $ext = $request->foto->getClientOriginalExtension();
    // rename file foto menjadi npm.extensi (contoh: 2226250068.jpg)
    $validasi["foto"] = $request->npm.".".$ext;
    // upload file foto ke dalam folder public /foto
    $request->foto->move(public_path('foto'), $validasi["foto"]);
    // simpan data mahasiswa ke table mahasiswas
    Mahasiswa::create($validasi);
    return Redirect("mahasiswa")->with("success","Data mahasiswa berhasil disimpan");
    }



    //

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
