@extends('TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Arsip Berita</h2>
        <div class="row">
            <div class="col-8 m-3">
                <div class="table-responsive small">
                    <table class="table table-striped table-sm">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Judul</th>
                          <th scope="col">Kegiatan</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($posts as $post)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $post->judul }}</td>
                              <td>{{ $post->kegiatan->nama }}</td>
                              <td>
                                  <a href="/{{ $post->id }}" class="btn btn-primary">Detail</a>
                                  <a href="/edit-berita/{{ $post->id }}" class="btn btn-warning">Edit</a>

                                  <form action="/delete-berita/{{ $post->id }}" method="post" class="d-inline">
                                      @csrf
                                      <button class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</button>
                                  </form>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
     </div>


@endsection
