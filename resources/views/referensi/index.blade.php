

<html>
    <head>
        <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
        <title>Daftar Referensi</title>
    </head>
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">
    <body>
        @extends("master")
        @include("navbarrr")

        @section("layout")
        <div class="container col-md-11 mt-9">
            <div class="card">
                <div class="card-header bg-success text-white ">
                    KUMPULAN REFERENSI <a href="{{ route('referensi.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="2%">No</th>
                                <th width="50%">Judul</th>
                                <th width="30%">Issn</th>
                                <th>Tahun</th>
                                <th align="center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($referensi as $index => $referensi )
                        <tr>
                            <td>{{ $index + 1  }}</td>
                            <td>{{ $referensi->judul }}</td>
                            <td>{{ $referensi->issn }}</td>
                            <td>{{ $referensi->Tahun }}</td>
                            <td>
                                <a href="{{ route("referensi.edit", ['id' => $referensi->id ]) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route("referensi.show", ['id' => $referensi->id ]) }}" class="btn btn-sm btn-danger">Show</a>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        @endsection
    <script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    </body>
    </html>



