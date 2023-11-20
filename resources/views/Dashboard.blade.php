@extends('Dashboard.TDashboard')

@section('konten')
@if (session('message'))
    <div class="m-3">
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
        </div>
    </div>
@endif
<div class="container mb-5">
    <h2 class="m-3">Halaman Dashboard</h2>

    <div class="row m-3">
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center m-2">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-danger text-uppercase mb-1">
                               Total Berita</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPost }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center m-2">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-warning text-uppercase mb-1">
                               Total Kegiatan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahKegiatan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center m-2">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                               Total Pesan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPesan }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
