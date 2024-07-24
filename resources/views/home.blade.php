<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #FFE803">
    @include('include.header')
<div class="container">
    <div class="text-center mt-3">
    <h4 style="font-family: 'Times New Roman', 'Times', serif;">Project <br> Aplikasi Data PKL <br> Tahun Ajaran 2024</h4>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-warning">Informasi Aplikasi</div>
                <div class="card-body bg-warning-subtle" style="font-family:  monospace;">
                    Aplikasi ini memuat data tentang Praktik Kerja Lapangan (PKL) <br><br>
                    Petunjuk Penggunaan Aplikasi Data PKL : <br>
                    <ol>
                        <li>Daftar jika belum mempunyai akun</li>
                        <li>Login menggunakan akun yang sudah didaftarkan</li>
                        <li>Isi form data sekolah</li>
                        <li>Klik tombol simpan</li>
                        <li>Data akan masuk ke tabel data sekolah</li>
                        <li>Isi form data peserta</li>
                        <li>Klik tombol simpan</li>
                        <li>Data akan masuk ke tabel data peserta</li>
                    </ol>
                </div>
                <div class="card-footer bg-warning"></div>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
