<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4 mt-5">Data Barang</h1>



    <div class="container">
        <a href="/tambahbarang" class="btn btn-primary mb-5">Tambah Barang</a>
        <div class="row">
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode kasir</th>
                    <th scope="col">Nama</th>
                    <th scope="col">HP</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                <tr>
                    <th scope="row">{{ $row->id }}</th>
                    <td>{{ $row->kodekasir }}</td>
                    <td>{{ $row->namakasir }}</td>
                    <td>{{ $row->notelp }}</td>
                    <td>{{ $row->stok }}</td>
                    <td>
                      <a href="/tampilbarang/{{ $row->id }}" class="btn btn-secondary">Edit</a>
                      <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>