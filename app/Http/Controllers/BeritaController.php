<?php

namespace App\Http\Controllers;

use App\Models\Beritas;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Beritas::all();
        return view('Berita.arsipBerita', ['beritas' => $beritas]);
    }
    public function create()
    {
        return view('Berita.inputBerita');
    }
    public function kategoriIndex()
    {
        return view('Berita.kategori');
    }
    public function store(Request $request)
    {
        $berita = Beritas::make();
        $file = $request->file('foto');
        $namaFile = $file->getClientOriginalName();
        $file->storeAs('berita', $namaFile, 'public');
        $berita->foto = $namaFile;
        $berita->save();

        return redirect()->back();
    }
}
