<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $mahasiswa = Mahasiswa::all();
        return view(('mahasiswa.index'))
                ->with('mahasiswa',$mahasiswa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.create')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request->validate([
            'npm' => "required|unique:mahasiswa",
            'nama' => "required|unique:mahasiswa",
            'tempat_lahir' => "required",
            'tanggal_lahir' => "required",
            'alamat' => "required",
            'url_foto' => "required|file|mimes:png,jpg|max:5000",
            'prodi_id' => "requiered"
        ]);

        // ekstensi file yang di upload
        $ext = $request->url_foto->getClientOriginalExtension();
        // rename

        Mahasiswa::create($val);

        return redirect()->route('mahasiswa.index')->with('succes',$val['nama'].'Berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        //
    }
}
