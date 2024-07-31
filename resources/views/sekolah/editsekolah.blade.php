<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #FFE803">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Form Isi Data Sekolah
                    </div>
                    <div class="card-body">
                        <form action="/ubahsekolah/{{$sekolah->id}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Sekolah</label>
                                <input type="text" class="form-control" name="namasekolah" id="" value="{{$sekolah->namasekolah}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Sekolah</label>
                                <input type="text" class="form-control" name="alamatsekolah" id="" value="{{$sekolah->alamatsekolah}}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Perwakilan</label>
                                <input type="text" class="form-control" name="namaperwakilan" id="" value="{{$sekolah->namaperwakilan}}">
                            </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"> Simpan </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script
</body>
</html>
