@extends('TDashboard')

@section('konten')
    <div class="container">
        <h2>Arsip Berita</h2>
        <div class="row">
            @foreach ($beritas as $berita)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/foto/' . $berita->foto) }}" alt="{{ $berita->foto }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
