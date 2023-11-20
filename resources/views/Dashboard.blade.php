@extends('Dashboard.TDashboard')

@section('konten')
@if (session('message'))
    <div class="mx-5">
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
        </div>
    </div>
@endif
    <div class="container">
        <h1>Halaman Utama</h1>
    </div>
@endsection
