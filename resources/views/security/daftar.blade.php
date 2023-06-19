<!doctype html>
<html lang="en">

<head>
    <title>Masukkan Akun Anda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-6">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Daftar Akun</h3>
                        <form action="{{ route('postlogin') }}" class="login-form" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" name="password"
                                    placeholder="Password">
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary rounded submit p-3 px-5">Get
                                    Started</button>
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
