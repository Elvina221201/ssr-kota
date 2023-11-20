<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pesan;
use App\Models\Posts;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('Dashboard', [
            'jumlahPost' => Posts::count(),
            'jumlahKegiatan' => Kegiatan::count(),
            'jumlahPesan' => Pesan::count()
        ]);
    }
};
