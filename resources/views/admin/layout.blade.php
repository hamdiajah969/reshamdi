<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK Kapal')</title>

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        /* --- Gaya Navbar --- */
        .main-navbar {
            background-color: #0d47a1; /* biru tua */
        }
        .navbar-brand-text {
            line-height: 1.2;
        }
        .navbar-brand-text .title {
            font-weight: 700;
            font-size: 1rem;
        }
        .navbar-brand-text .subtitle {
            font-size: .9rem;
            color: #dbe4ff;
        }
        .nav-link {
            color: #fff !important;
            font-weight: 500;
            margin-left: 1rem;
        }
        .nav-link:hover,
        .dropdown-item:hover {
            color: #ffd600 !important;
        }
        .dropdown-menu {
            background-color: #0d47a1;
            border: none;
        }
        .dropdown-item {
            color: #fff;
        }
        .dropdown-item:hover {
            background-color: rgba(255,255,255,0.15);
        }
        /* garis putih tipis di bawah navbar */
        .nav-bottom-border {
            border-bottom: 3px solid #fff;
        }
    </style>
</head>
<body>

<!-- ======= Navbar ======= -->
<nav class="navbar navbar-expand-lg navbar-dark main-navbar nav-bottom-border">
    <div class="container">
        {{-- Logo + teks sekolah --}}
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('assets/foto/foto1.png') }}" alt="Logo" width="60" height="60" class="me-2 rounded-circle">
            <div class="navbar-brand-text">
                <div class="title"></div>
                <div class="subtitle">Pondok Pesantren</div>
                <div class="subtitle">Hidayatullah Surabaya</div>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Menu kanan --}}
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="tentangDrop" role="button" data-bs-toggle="dropdown">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="tentangDrop">
                        <li><a class="dropdown-item" href="#">Profil Sekolah</a></li>
                        <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="programmeDrop" role="button" data-bs-toggle="dropdown">
                        Programme
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="programmeDrop">
                        <li><a class="dropdown-item" href="#">Ekstrakurikuler</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="curriculumDrop" role="button" data-bs-toggle="dropdown">
                        Curriculum
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="curriculumDrop">
                        <li><a class="dropdown-item" href="#">Kurikulum SMA</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="outputDrop" role="button" data-bs-toggle="dropdown">
                        Output Profile
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="outputDrop">
                        <li><a class="dropdown-item" href="#">Lulusan</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ======= Main Content ======= -->
<main>
    @yield('content')
</main>

<!-- ======= Footer (opsional) ======= -->
<footer class="bg-dark text-white text-center py-3">
    &copy; {{ date('Y') }} SMA Integral Luqman al Hakim
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
