@extends('Dashboard.TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Input Berita</h2>
        <div class="row">
            <div class="col-8 m-3">
                <form  method="post" action="/input-berita" enctype="multipart/form-data">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" placeholder="name@example.com" name="judul">
                        <label for="judul">Judul</label>
                        @error('judul')
                        <div class="invalid-feedback fw-semibold ml-2 mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>

                      <select class="form-select mt-4" aria-label="Default select example" name="kegiatan_id">
                        @foreach ($kegiatan as $kg)
                        @if (old('kegiatan_id') == $kg->id)
                            <option value="{{ $kg->id }}" selected>{{ $kg->nama}}</option>
                        @else
                            <option value="{{ $kg->id }}">{{ $kg->nama }}</option>
                        @endif
                        @endforeach
                      </select>

                      <div class="mb-3 mt-2">
                        <label for="image" class="form-label">Pilihlah Gambar</label>
                        <img class="img-thumbnail mb-3 img-fluid gambar-thumbnail">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">

                      </div>

                      <div class="mt-4">
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body" style="width: 100%; height: 600px;"></trix-editor>
                      </div>

                      <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                </form>
            </div>
        </div>
     </div>
<script>
        // Preview Image
        function previewImage() {
        const image = document.querySelector('#image');
        const priviewImage = document.querySelector('.gambar-thumbnail');

        //priviewImage.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            priviewImage.src = oFREvent.target.result;
        }
    }
</script>

@endsection
