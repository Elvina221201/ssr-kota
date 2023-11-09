@extends('TDashboard')

@section('konten')
            <div class="container">
                <h1>Upload Gambar</h1>
                <form id="form-upload" action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="gambar" id="input-gambar" accept="image/*">
                    <button type="button" onclick="uploadGambar()">Upload</button>
                </form>
                <div id="preview-container">
                    <img id="preview-gambar" alt="Preview Gambar">
                </div>

@endsection
