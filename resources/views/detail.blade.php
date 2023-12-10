@extends('/template-dasar/templateUtama')

@section('konten')
<section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h2>Halaman Detail Berita</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-11 m-3">
                            <h2>{{ $post->judul }}</h2>

                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-thumbnail shadow rounded-1 mb-2" alt="image">
                            <p class="text-decoration-none text-dark fw-bold mt-2">
                                Ditulis Oleh : {{ $post->user->name }}
                            </p>
                        <p>
                            {!! $post->body !!}
                        </p>



                        <a href="/" class="btn btn-primary mt-3">Kembali</a>

                    </div>
                </div>
            </div>
        </section>
@endsection
