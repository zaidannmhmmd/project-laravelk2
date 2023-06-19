<html>
    <head>
        <title>Materi</title>
    </head>
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">
    <body>
        @extends("layout1")
        @section("layout")
        <div class="container col-md-10 mt-4">
            <div class="card">
                <div class="card-header bg-success text-white ">
                    REFERENSI
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post">
                        @method($method)
                        @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <td>{{ $referensi->id }}</td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td><input type="text" class="form-control" name="judul" value="{{ $referensi->judul }}"></td>
                            </tr>
                            <tr>
                                <th>Issn</th>
                                <td><input type="text" class="form-control" name="issn" value="{{ $referensi->issn }}" ><br></td>
                            </tr>
                            <tr>
                                <th>Abstrak</th>
                                <td><input type="text" class="form-control" name="abstrak" value="{{ $referensi->abstrak }}" ></td>
                            </tr>
                            <tr>
                                <th>Tahun</th>
                                <td><input type="number" class="form-control" name="Tahun" value="{{ $referensi->Tahun }}" ></td>
                            </tr>
                            <tr>
                                <th>Materi Terkait</th>
                            </tr>
                            <tr>
                                <th></th>
                                <td rowspan="3">
                                    @foreach ($data_materi as $index => $materi )
                                    <input type="checkbox" name="materi_id[]" value="{{ $materi->id }}"> {{ $materi->tema }}<br>
                                    @endforeach
                                </td>
                        </thead>
                        <tbody>
                        <center>
                        <tr>
                            <td colspan="5"><button class="btn btn-sm btn-warning" type="submit"> Simpan Data </button></td>
                        </tr>
                    </center>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    @endsection
    </body>
    </html>
