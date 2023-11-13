@extends('TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Input Kegiatan</h2>
        <div class="row">
            <div class="col-8 m-3">
                <form  method="post" action="/kegiatan">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="title" placeholder="name@example.com" name="name">
                        <label for="title">Kegiatan</label>
                    </div>
                      <button type="submit" class="btn btn-primary mt-2">Tambah</button>
                </form>
            </div>
        </div>
     </div>


@endsection
