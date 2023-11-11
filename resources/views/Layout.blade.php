<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | SPP Apps</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css">
    @yield('css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient">
        <div class="container">
            <span class="navbar-brand fw-bold text-white">SPP Apps</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('spp')}}">SPP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('siswa')}}">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('kelas')}}">Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('petugas')}}">Petugas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('pembayaran')}}">Pembayaran</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Laporan
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Riwayat pembayaran</a></li>
                          <li><a class="dropdown-item" href="#">Laporan bulanan</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="btn btn-danger" href="{{url('logout/admin')}}">
                            
                            <i class="bi bi-power"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        @yield('content')
    </div>

    <script src="/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>

</html>
