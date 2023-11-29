<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Tenan Pujasera</title>
</head>
<body>
    @include('navbar')
    <div class="container mt-4">
        <h1 class="text-center">Data Tenan</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Kode Tenan</th>
                    <th>Nama Tenan</th>
                    <th>HP</th>
                </tr>
            </thead>
            <tbody>
                @php
                $no = 1;
               @endphp
                @foreach ($data as $row)
                 <tr>
                    <th>{{$no++ }}</th>
                    <td>{{$row->NamaTenan}}</td>
                    <td>{{$row->HP}}</td>
                    <td>
                    </td>
                </tr>
             @endforeach
              
            </tbody>
        </table>
    </div>
</body>
</html>
