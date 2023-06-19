<!DOCTYPE html>
<html>
<head>
    <title>mySong</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/home"><img src="{{URL ('img/logo.png')}}" width="50px" height="50px" > </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/home"><font color="#0063f2"><b>Beranda</b></font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/materi"><font color="#ff5255b2" ><b>Materi</b></font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/referensi"><font color="#ffb600"><b>Referensi</b></font></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/universitas"><font color="purple"><b>Universitas</b></font></a>
      </li>


    </ul>
    <a class="nav-link" href="/logout"><font color="red"><b>Logout</b></font></a>
    <form class="form-inline my-2 my-lg-0">
      <a href="/dosen"><img src="{{URL ('img/akun.png')}}" width="30px" height="30px" > </a>
    </form>
  </div>
</nav></body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="css/bootstrap.css" rel="stylesheet">

</head>
</html>
