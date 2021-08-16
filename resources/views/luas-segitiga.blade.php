<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luas Segitiga</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h2>Luas Segitiga</h2>
  <form method="POST" action="/luas-persegi-panjang">
    @csrf
    <div class="form-group">
      <label>Alas</label>
      <input type="number" placeholder="Masukan Alas" class="form-control" value="{{ $alas }}">
    </div>
    <div class="form-group">
      <label>Tinggi</label>
      <input type="number" placeholder="Masukan Tinggi" class="form-control" value="{{ $tinggi }}">
    </div>
    <div class="form-group">
        <label>Hasil</label>
        <input type="number" value="{{ $hasil }}" class="form-control" name="">
      </div>
    <a href="" class="btn btn-success">Kembali</a>
  </form>
</div>

</body>
</html>
