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
                                <th width="10%">No</th>
                                <td>{{ $universitas->id }}</td>
                            </tr>
                            <tr>
                                <th>Universitas</th>
                                <td><input type="text" class="form-control" name="nama" value="{{ $universitas->nama }}"></td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td><input type="text" class="form-control" name="keterangan" value="{{ $universitas->keterangan }}" ><br></td>
                            </tr>
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
