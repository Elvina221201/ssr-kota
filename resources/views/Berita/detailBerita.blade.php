@extends('TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Detail Berita</h2>
        <div class="row">
            <div class="col-8 m-3">
                    <h4>{{ $post->judul }}</h4>

                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-thumbnail shadow rounded-1" alt="image">
                    <p class="text-decoration-none text-dark fw-bold mt-2">
                        Ditulis Oleh : {{ $post->user->name }}
                    </p>
                <p>
                    {!! $post->body !!}
                </p>



                <a href="/arsip-berita" class="btn btn-primary mt-3">Kembali</a>

            </div>
        </div>
     </div>

@endsection
