<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="{{ URL('img/logo.png') }}" type="image/x-icon">
    <title>Beranda</title>
</head>
<body bgcolor="#0063f2">
    @extends("master")
    @include('navbarrr')

    @section("layout") 
    <center>
    <img src="{{ URL('img/home.jpg') }}" width="100%" height="100%">
    </center>
    @endsection

</body>
</html>
