@extends('Dashboard.TDashboard')

@section('konten')
    <div class="container mb-5">
        <h2 class="m-3">Halaman Detail Pesan</h2>
        <div class="row">
            <div class="col-8 mx-3">
                    <h4>{{ $pesan->Nama }}</h4>

                    <p class="text-decoration-none text-dark fw-bold mt-2">
                        Dikirim Oleh : {{ $pesan->nama }}
                    </p>
                    <p class="text-decoration-none text-dark fw-sm mt-2">
                        Email : {{ $pesan->email }}
                    </p>
                <p>
                    {!! $pesan->message !!}
                </p>



                <a href="/pesan" class="btn btn-primary mt-3">Kembali</a>

            </div>
        </div>
     </div>

@endsection
