<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
    <title>Akun Dosen</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">

<body>
    @extends('master')
    @include('navbarrr')

    @section('layout')
        <div class="container col-md-14 mt-10">
            <div class="card">
                <div class="card-header bg-success text-white ">
                <a href="{{ route('dosen.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>

                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">
                                    NO
                                </th>
                                <th width="20%">
                                    NIDN
                                </th>
                                <th width="30%">
                                    Nama Penulis
                                </th>
                                <th width="10%">
                                    Jabatan
                                </th>
                                <th width="11%">
                                    TTL
                                </th>
                                <th width="30%">
                                    Universitas
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosen as $index => $dosen)
                                <tr>
                                    <td bgcolor="blue"> {{ $index + 1 }}</td>
                                    <td bgcolor=""> {{ $dosen->nidn }} </td>
                                    <td> {{ $dosen->nama }} </td>
                                    <td> {{ $dosen->jabatan }} </td>
                                    <td> {{ $dosen->tmp_lahir }}, {{ $dosen->tgl_lahir }} </td>
                                    <td> {{ $dosen->universitas->nama }} </td>
                                    <td>
                                    <form action="{{ route('dosen.destroy', ['id' => $dosen->id ]) }}" method="post">
                                        @method("delete")
                                        @csrf
                                        <button class="btn btn-danger"><img src="{{ URL ("/img/hapus.png") }}" height="20px" width="20px"></button>
                                    </form>
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
