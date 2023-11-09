<?php

namespace App\Http\Controllers;

use App\Models\Kegiatans;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatans::all();
        return view('Kegiatan.arsipkegiatan', ['kegiatans' => $kegiatans]);
    }
    public function create()
    {
        return view('Kegiatan.inputKegiatan');
    }
    public function store(Request $request)
    {
        $kegiatan = Kegiatans::make();
        $file = $request->file('foto');
        $namaFile = $file->getClientOriginalName();
        $file->storeAs('kegiatan', $namaFile, 'public');
        $kegiatan->foto = $namaFile;
        $kegiatan->save();

        return redirect()->back();
    }
}
