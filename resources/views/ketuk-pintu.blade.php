@extends('/template-dasar/templateUtama')

@section('konten')
<section class="section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center mb-4">
                        <h1>KETUK PINTU</h1>
                    </div>
                    @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="custom-block-wrap border">
                            <img src="{{ asset('storage/' . $post->image) }}" class="custom-block-image img-fluid" alt="" style="height: 200px;">


                            <div class="custom-block">
                                <div class="custom-block-body">
                                    <h5 class="mb-3">{{ $post->judul }}</h5>

                                    <p>{!! Illuminate\Support\Str::words($post->body, 10) !!}</p>


                                </div>

                                <a href="/" class="custom-btn btn rounded-pill">Baca Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>
            </div>
        </section>
@endsection
