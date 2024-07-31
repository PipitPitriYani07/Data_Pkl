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
    @include('include.navbar')
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            Form Isi Data Peserta
                        </div>
                        <div class="card-body">
                            <form action="/ubahpeserta/{{ $peserta->id }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Nama Peserta</label>
                                    <input type="text" name="namapeserta" class="form-control" id="" value="{{$peserta->namapeserta}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">NIS</label>
                                    <input type="number" name="nis" class="form-control" id="" value="{{$peserta->nis}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="" value="{{$peserta->jurusan}}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Sekolah</label>
                                    <select name="sekolah_id" id="sekolah_id" class="form-control">
                                        <option value="">Silahkan pilih Asal Sekolah</option>
                                        @foreach ($sekolah as $item)
                                            <option value="{{$item->id}}">{{$item->namasekolah}}</option>
                                        @endforeach
                                    </select> <br>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>

