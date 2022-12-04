<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body class="bg-warning" style="font-family = Poppins;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand text-light" href="/Home">
                <img src="{{ asset("css/images/RP.png") }}" alt="Logo" width="45" height="45" class="mx-3" style="border-radius : 15px;">
                <strong>GROW UP COMPANY</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toogle="collapse" data-bs-target="navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toogle navigation">
                <span class="navbar-toogler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a  class="nav-link active text-light fs-5"  aria-current="page" href="/Home">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light fs-5" href="/Jabatan">Position</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light fs-5" href="/Karyawan">Employee</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light fs-5" href="/Gaji">Wages</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-light fs-5" href="/Laporan">Report</a>
                    </li>
                </ul>
            </div>   
        </div>
    </nav>

    <!-- Content -->
    <div class="div container">
        <div class="row m-4">
            <div class="col">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>