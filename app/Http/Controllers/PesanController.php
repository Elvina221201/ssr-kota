<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Http\Requests\StorePesanRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePesanRequest;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.Pesan.pesan', [
            'pesans' => Pesan::Latest()->paginate(5)
        ]);
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
        $credentials = $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);

        Pesan::create($credentials);

        return redirect('/')->with('Berhasil', 'Pesan Berhasil Dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        return view('Dashboard.Pesan.detailPesan', [
            'pesan' => Pesan::where('id', $request->id)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pesan $pesan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePesanRequest $request, Pesan $pesan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $pesan = Pesan::findOrFail($request->id);
        $pesan->delete();
        return redirect('/pesan')->with('SuccessPosts', 'Post has been deleted!');
    }
}
