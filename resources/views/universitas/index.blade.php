<!DOCTYPE html>

<html>

<head>
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
    <title>Universitas</title>
</head>
<link rel="stylesheet" type="text/css" href="{{ URL('/css/bootstrap.min.css') }}">

<body>
    @extends('master')
    @include('navbarrr')

    @section('layout')
        <div class="container col-md-14 mt-10">
            <div class="card">
                <div class="card-header bg-success text-white ">
                    <h2>Universitas Yang Tersedia<a href="{{ route('universitas.create') }}" class="btn btn-sm btn-primary float-right">Tambah</a>

                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th width="2%">
                                    NO
                                </th>
                                <th width="20%">
                                    Universitas
                                </th>
                                <th width="30%">
                                    Keterangan
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($universitas as $index => $universitas)
                                <tr>
                                    <td width="2%" bgcolor="blue"> {{ $index + 1 }}</td>
                                    <td bgcolor=""> {{ $universitas->nama }} </td>
                                    <td> {{ $universitas->keterangan }} </td>
                                    <td width="1%">
                                        <a href="{{ route("universitas.edit", ['id' => $universitas->id ]) }}" class="btn btn-sm btn-warning"><img src="{{ URL ("/img/pensil.png") }}" height="20px" width="20px"></a><br><br>
                                    <form action="{{ route('universitas.destroy', ['id' => $universitas->id ]) }}" method="post">
                                        @method("delete")
                                        @csrf
                                        <button class="btn btn-danger"><img src="{{ URL ("/img/hapus.png") }}" height="14px" width="14px"></button>
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
