@extends('Dashboard.TDashboard')

@section('konten')
@if (session('message'))
    <div class="m-3">
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
        </div>
    </div>
@endif
    <div class="container">
        <h2 class="m-3">Halaman Dashboard</h2>
    </div>
    <div class="row">

    </div>
@endsection
