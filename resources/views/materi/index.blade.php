

<html>
    <head>
        <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
        <title>Daftar Materi</title>
    </head>
    <link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">
    <body>
        @extends("master")
        @include("navbarrr")

        @section("layout")
        <div class="container col-md-11 mt-9">
            <div class="card">
                <div class="card-header bg-success text-white ">
                    KUMPULAN MATERI <a href="{{ route('materi.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Kurikulum</th>
                                <th>Penulis</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($materi as $index => $materi )
                        <tr>
                            <td>{{ $index + 1  }}</td>
                            <td>{{ $materi->tema }}</td>
                            <td>{{ $materi->kurikulum }}</td>
                            <td>{{ $materi->dosen?->nama}}</td>
                            <td>
                                <a href="{{ route("materi.edit", ['id' => $materi->id ]) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route("materi.show", ['id' => $materi->id ]) }}" class="btn btn-sm btn-danger">Show</a>
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



