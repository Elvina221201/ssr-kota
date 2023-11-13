@extends('TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Input Berita</h2>
        <div class="row">
            <div class="col-8 m-3">
                <form  method="post" action="/dashboard/posts" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="name@example.com" name="title">
                        <label for="title">Judul</label>
                      </div>

                      <select class="form-select mt-4" aria-label="Default select example" name="category_id">
                        {{-- @foreach ($categories as $ct)
                        @if (old('category_id') == $ct->id)
                            <option value="{{ $ct->id }}" selected>{{ $ct->name }}</option>
                        @else
                            <option value="{{ $ct->id }}">{{ $ct->name }}</option>
                        @endif
                        @endforeach --}}
                      </select>

                      <div class="mb-3 mt-2">
                        <label for="image" class="form-label">Choose Image Post</label>
                        <img class="img-thumbnail mb-3 img-fluid">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"  name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback fw-semibold">
                                {{ $message }}
                            </div>
                        @enderror
                      </div>

                      <div class="mt-4">
                        <input id="body" type="hidden" name="body">
                      <trix-editor input="body"></trix-editor>
                      </div>

                      <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                </form>
            </div>
        </div>
     </div>


@endsection
