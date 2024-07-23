<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/daftarsekolah" method="POST">
    @csrf
    <small>Asal Sekolah</small> <br>
    <input type="text" name="namasekolah"> <br>
    <small>Alamat Sekolah</small> <br>
    <input type="text" name="alamatsekolah"> <br>
    <small>Nama Perwakilan</small> <br>
    <input type="text" name="namaperwakilan"> <br>
    <br>
    <button type="submit">Simpan</button>
    </form>
</body>
</html>
