<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h4 class="header-title">Daftar Buku</h4>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">JUDUL</th>
                                <th scope="col">TAHUN TERBIT</th>
                                <th scope="col">PENERBIT</th>
                                <th scope="col">PENGARANG</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($buku as $bukus )
                                <tr>
                                    <td>{{ $bukus->judul }}</td>
                                    <td>{{ $bukus->tahun_terbit }}</td>
                                    <td>{{ $bukus->penerbit }}</td>
                                    <td>{{ $bukus->id_pengarang }}</td>
                                </tr> 
                                @endforeach
                            </tbody>
                          </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
