@extends('TDashboard')

@section('konten')
    <div class="container">
        <h1>Halaman Input Berita</h1>
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="style.css">
                <title>Upload Gambar</title>
            </head>
            <body>
                <div class="container">
                    <h2>Upload Gambar</h2>
                    <form id="form-upload" action="upload.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="gambar" id="input-gambar" accept="image/*">
                        <button type="button" onclick="uploadGambar()">Upload</button>
                    </form>
                    <div id="preview-container">
                        <img id="preview-gambar" alt="Preview Gambar">
                    </div>
                </div>
                <script src="script.js"></script>
            </body>
            </html>

    </div>
@endsection
