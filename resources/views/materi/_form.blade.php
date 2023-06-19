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
                    MATERI
                </div>
                <div class="card-body">
                    <form action="{{ $action }}" method="post">
                        @method($method)
                        @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <td>{{ $materi->id }}</td>
                            </tr>
                            <tr>
                                <th>Judul</th>
                                <td><input type="text" name="tema" class="form-control" value="{{ $materi->tema }}"></td>
                            </tr>
                            <tr>
                                <th>Materi</th>
                                <td><input type="text" name="penjelasan" class="form-control" value="{{ $materi->penjelasan }}" ><br></td>
                            </tr>
                            <tr>
                                <th>kurikulum</th>
                                <td><input type="text" name="kurikulum" class="form-control" value="{{ $materi->kurikulum }}" ></td>
                            </tr>
                            <tr>
                                <th>Penulis</th>
                                <td><select name="dosen_id" class="form-control" value="{{ $materi->dosen?->nama }}">
                                    <option value="">--Pilih Penulis--</option>
                                @foreach ($data_dosen as $key => $dosen )
                                    <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                                @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>Referensi Terkait</th>
                            </tr>
                            <tr>
                                <th></th>
                                <td rowspan="3">
                                    @foreach ($data_referensi as $index => $referensi )
                                    <input type="checkbox" name="referensi_id[]" value="{{ $referensi->id }}"> {{ $referensi->judul }}<br><br>
                                    @endforeach
                                </td>
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
