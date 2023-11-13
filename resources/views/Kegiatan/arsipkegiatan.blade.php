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
                          <th scope="col">Nama</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($kegiatan as $keg)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $keg->nama }}</td>
                              <td>
                                  <a href="" class="btn btn-warning">Edit</a>

                                  <form action="/delete-kegiatan/{{ $keg->id }}" method="post" class="d-inline">
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
