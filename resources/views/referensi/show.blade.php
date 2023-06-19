<html>

<head>
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
    <title>Daftar Referensi</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">

<body>
    @extends('master')
    @include('navbarrr')

    @section('layout')
        <div class="container col-md-11 mt-9">
            <div class="card">
                <div class="card-header bg-success text-white ">
                    <font face="arial" size="5"><b> {{ $referensi->judul }}<b></font><a href="{{ route("referensi.index") }}" class="btn btn-sm btn-warning float-right">Back</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Referensi <a href="#" class="btn btn-sm btn-primary float-right">Full PDF</a></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>{{ $referensi->abstrak }}<br><br><br>
                                    <br><br><br>
                                <form action="{{ route('referensi.destroy', ['id' => $referensi->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm float-right">Hapus</button>
                                </form>
                            </td>
                            </tr>
                            <tr>
                                <td><b>MATERI YANG TERKAIT</b></td>
                            </tr>
                            @foreach ($referensi->materi as $key => $materi)
                            <tr>
                                <td><li><b><a href="{{ route("materi.show", ['id' => $materi->id ]) }}">{{ $materi->tema }} | {{ $materi->dosen?->nama }}</a></b></li><td>
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
