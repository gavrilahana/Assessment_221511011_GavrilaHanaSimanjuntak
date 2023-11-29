<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tambah Data Barang Pujasera</title>
</head>
<body>
    @include('navbar')
    <div class="container mt-4">
        <h1 class="text-center">Tambah Barang</h1>
        <div class="div row justify-content-center">
            <div class="div col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertDataBarang" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                              <label for="text" class="form-label">Nama Barang</label>
                              <input type="text" name="NamaBarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                              <label for="text" class="form-label">Satuan</label>
                              <input type="text" name="Satuan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Harga Satuan</label>
                                <input type="text" name="HargaSatuan" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Stok</label>
                                <input type="text" name="Stok" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>