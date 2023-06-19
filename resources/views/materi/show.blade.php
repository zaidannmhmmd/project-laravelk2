<html>

<head>
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
    <title>Daftar Materi</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">

<body>
    @extends('master')
    @include('navbarrr')

    @section('layout')
        <div class="container col-md-11 mt-9">
            <div class="card">
                <div class="card-header bg-success text-white ">
                    <font face="arial" size="5"><b> {{ $materi->tema }}<b></font><a
                        href="{{ route('materi.index') }}" class="btn btn-sm btn-warning float-right">Back</a>
                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Materi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $materi->penjelasan }}<br><br><br>
                                <form action="{{ route('materi.destroy', ['id' => $materi->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm float-right">Hapus Materi</button>
                                </form>
                                </td>
                            </tr>
                            <tr>
                                <td><br><br><br><br><b>REFERENSI YANG TERKAIT</b></td>
                            </tr>
                            @foreach ($materi->referensi as $key => $referensi)
                                <tr>
                                    <td>
                                        <li><b><a href="{{ route("referensi.show", ['id' => $referensi->id ]) }}">{{ $referensi->judul }}</b></li>
                                    <td>
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
