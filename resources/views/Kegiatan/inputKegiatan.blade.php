@extends('TDashboard')

@section('konten')
    <div class="container">
        <h1>Halaman Input Kegiatan</h1>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
            <title>Upload Gambar</title>
        </head>

        <body>
            <div class="container mt-5">
                <form action="/kegiatan/store" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h2 class="mb-4">Upload Gambar</h2>
                    <div class="form-group">
                        <label for="foto">Pilih foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </body>

        </html>

    </div>
@endsection
