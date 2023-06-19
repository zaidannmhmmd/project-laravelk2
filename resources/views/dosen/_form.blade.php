    <!doctype html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    </head>

    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 col-lg-7">
                        <div class="login-wrap p-5 p-md-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-user-o"></span>
                            </div>
                            <h3 class="text-center mb-4">Buat Akun Baru</h3>
                            <form action="{{ $action }}" class="login-form" method="post">
                                <table>
                                    @method($method)
                                    @csrf
                                    @if ($errors->any())
                                    <tr>
                                        <td colspan="2">
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error )
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                 Nama Panggilan :<br><input type="text" class="form-control rounded-left" name="name" value="{{ $user->name }}"
                                                    placeholder="Nama Panggilan">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                Status Akun :<select name="level" class="form-control rounded-left">
                                                    <option value="">--</option>
                                                    <option value="dosen">dosen</option>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                Email :<br><input type="email" class="form-control rounded-left" name="email" value="{{ $user->email }}"
                                                    placeholder="Email">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                Password :<br><input type="password" class="form-control rounded-left" name="password" value="{{ $user->password }}"
                                                    placeholder="Password">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                Nidn :<br><input type="number" class="form-control rounded-left" name="nidn" value="{{ $dosen->nidn }}"
                                                    placeholder="Nidn">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                Nama Lengkap :<input type="text" class="form-control rounded-left" name="nama" value="{{ $dosen->nama }}"
                                                    placeholder="Nama Lengkap">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                Tempat Lahir :<br><input type="text" class="form-control rounded-left" name="tmp_lahir" value="{{ $dosen->tmp_lahir }}"
                                                    placeholder="Tempat Lahir">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                Tanggal Lahir :<input type="date" class="form-control rounded-left" name="tgl_lahir" value="{{ $dosen->tgl_lahir }}"
                                                    placeholder="Tanggal Lahir">
                                            </div>
                                        </td>
                                    </tr>
                                    <center>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                Jabatan :<select name="jabatan" class="form-control rounded-left">
                                                    <option value="">--</option>
                                                    <option value="Dosen">Dosen</option>
                                                    <option value="Pengajar">Pengajar</option>
                                                    <option value="Rektor">Rektor</option>
                                                    <option value="Staff">Staff</option>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                Universitas :<br>
                                                <select name="universitas_id" class="form-control rounded-left">
                                                    <option value="">--</option>
                                                @foreach ($data_universitas as $key => $universitas )
                                                    <option value="{{ $universitas->id }}">{{ $universitas->nama }}</option>
                                            </div>
                                            @endforeach
                                        </td>
                                    </tr>
                                    </center>
                                </table>
                                <div class="form-group">
                                    <button type="submit" name="submit"
                                        class="btn btn-primary rounded submit p-3 px-5">Daftar Akun</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="{{ URL('js/jquery.min.js') }}"></script>
        <script src="{{ URL('js/popper.js') }}"></script>
        <script src="{{ URL('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL('}js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @if ($messege = Session::get('gagal'))
            {
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ $messege }}',
                })
            </script>
            }
        @endif
    </body>

    </html>
