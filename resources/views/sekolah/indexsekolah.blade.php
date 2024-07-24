<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Sekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #FFE803">
    @include('include.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Form Isi Data Sekolah
                    </div>
                    <div class="card-body">
                        <form action="/daftarsekolah" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nama Sekolah</label>
                                <input type="text" class="form-control" name="namasekolah" id="" placeholder="Masukkan nama sekolah">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat Sekolah</label>
                                <input type="text" class="form-control" name="alamatsekolah" id="" placeholder="Masukkan alamat sekolah">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Perwakilan</label>
                                <input type="text" class="form-control" name="namaperwakilan" id="" placeholder="Masukkan nama perwakilan">
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
    <div class="container-fluid">
    <div class="container mt-5">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    DataTables Sekolah
                </h6> <br>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Sekolah</th>
                                <th>Alamat Sekolah</th>
                                <th>Nama Perwakilan</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sekolah as $item )
                            <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->namasekolah }}</td>
                            <td>{{ $item->alamatsekolah }}</td>
                            <td>{{ $item->namaperwakilan }}</td>
                            <td>
                                <a href="/hapussekolah/{{ $item->id }}">Hapus</a>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
