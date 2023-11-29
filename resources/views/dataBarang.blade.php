<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Barang Pujasera</title>
</head>
<body>
    @include('navbar')
    <div class="container mt-4">
        <h1 class="text-center">Data Barang</h1>
        <a href="/tambahDataBarang" type="button" class="btn btn-success mb-3" onclick="tampilkanForm()">Tambah Barang</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Satuan</th>
                    <th>Harga Satuan</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
               @endphp
                @foreach ($data as $row)
                 <tr>
                    <th>{{$no++ }}</th>
                    <td>{{$row->NamaBarang}}</td>
                    <td>{{$row->Satuan}}</td>
                    <td>{{$row->HargaSatuan}}</td>
                    <td>{{$row->Stok}}</td>
                    
                    <td>
                        <div>
                            <a href="/editDataBarang/{{$row->KodeBarang}}" class="btn btn-primary">Edit</a>
                            <a href="/deleteDataBarang/{{$row->Kode_Barang}}" class="btn btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
             @endforeach
              
            </tbody>
        </table>
    </div>
</body>
</html>
