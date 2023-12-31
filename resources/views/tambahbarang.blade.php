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
    <h1 class="text-center mb-4">Tambah Barang</h1>


    <div class="container">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
            <div class="card-body">
              <form action="/insertbarang" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                  <input type="text" name="kodebarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Barang </label>
                  <input type="text" name="namabarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Satuan</label>
                  <select class="form-select" name="satuan" aria-label="Default select example">
                    <option selected>Pilih satuan yang diinginkan</option>
                    <option value="Dus">Dus</option>
                    <option value="Sachet">Sachet</option>
                    <option value="Botol">Botol</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Harga Satuan </label>
                  <input type="number" name="hargasatuan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Stok </label>
                  <input type="number" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>