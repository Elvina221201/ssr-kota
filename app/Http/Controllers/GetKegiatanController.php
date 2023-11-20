<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Posts;
use Illuminate\Http\Request;

class GetKegiatanController extends Controller
{
    public function getnews(){
        return view('index', [
            'posts' => Posts::all()
        ]);
    }

    public function grebek(Posts $posts)
    {

        // Cari kegiatan dengan nama 'grebek'
        $kegiatan = Kegiatan::where('nama', 'grebek')->first();

        if ($kegiatan) {
            // Jika kegiatan ditemukan, ambil ID-nya
            $kegiatan_id = $kegiatan->id;

            // Mengambil post dengan kegiatan_id yang sesuai
            $posts = Posts::where('kegiatan_id', $kegiatan_id)->get();

            return view('grebek', [
                'posts' => $posts
            ]);
        } else {
            // Kegiatan 'grebek' tidak ditemukan
            return view('grebek', [
                'posts' => [] // Atau sesuaikan dengan logika Anda jika tidak ditemukan
            ]);
        }
    }

    public function ketuk(Posts $posts)
    {

        // Cari kegiatan dengan nama 'grebek'
        $kegiatan = Kegiatan::where('nama', 'ketuk-pintu')->first();

        if ($kegiatan) {
            // Jika kegiatan ditemukan, ambil ID-nya
            $kegiatan_id = $kegiatan->id;

            // Mengambil post dengan kegiatan_id yang sesuai
            $posts = Posts::where('kegiatan_id', $kegiatan_id)->get();

            return view('ketuk-pintu', [
                'posts' => $posts
            ]);
        } else {
            // Kegiatan 'grebek' tidak ditemukan
            return view('ketuk-pintu', [
                'posts' => [] // Atau sesuaikan dengan logika Anda jika tidak ditemukan
            ]);
        }
    }
}
