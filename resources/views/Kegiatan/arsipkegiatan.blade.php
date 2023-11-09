@extends('TDashboard')

@section('konten')
    <div class="container">
        <h2>Arsip Kegiatan</h2>
        <div class="row">
            @foreach ($kegiatans as $kegiatan)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/foto/' . $kegiatan->foto) }}" alt="{{ $kegiatan->foto }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
