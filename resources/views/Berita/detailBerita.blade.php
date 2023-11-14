@extends('TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Detail Berita</h2>
        <div class="row">
            <div class="col-8 m-2">
                    <h2>{{ $post->judul }}</h2>

                    <img src="{{ asset('storage/' . $post->gambar) }}" class="card-img-top" alt="image">

                <p>By.
                    {{-- <a class="text-decoration-none text-dark fw-bold" href="/author/{{ $posts->user->name }}">
                        {{ $posts->user->name }}
                    </a> --}}
                </p>
                <p>
                    {!! $post->body !!}
                </p>



                <a href="/dashboard/posts" class="btn btn-primary mt-3">Kembali</a>

            </div>
        </div>
     </div>

@endsection
