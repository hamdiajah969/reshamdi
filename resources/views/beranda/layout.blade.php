<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK Kapal')</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
</head>
<body>

    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1">
    <div class="container d-flex justify-content-center">
        <div class="d-flex align-items-center me-4">
            <span class="text-white me-1"><i class="fas fa-map-marker-alt"></i></span>
            <span class="text-white small">Jln Pahlawan Kota Tasik No.8, Karangsari 44139</span>
        </div>
        <div class="d-flex align-items-center me-4">
            <span class="text-white me-1"><i class="fas fa-phone"></i></span>
            <span class="text-white small">0287-381820</span>
        </div>
        <div class="d-flex align-items-center">
            <span class="text-white me-1"><i class="fas fa-envelope"></i></span>
            <span class="text-white small">kapal.tech@gmail.com</span>
        </div>
    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/foto/foto1.png') }}" alt="Logo" height="40" class="me-2">
            SMK Kapal
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                {{-- <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="#berita">Berita</a></li>
                <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="#agenda">Agenda</a></li> --}}
                <li class="nav-item"><a class="nav-link" href="#alumni">Register</a></li>
                <li class="nav-item"><a class="btn nav-link" href="{{ route('login') }}">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-success text-white pt-5 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/foto/foto1.png') }}" alt="Logo Sekolah" height="70" class="me-3" class="me-3">
                    <h5 class="fw-bold m-0">SMA N 1 YOGYAKARTA</h5>
                </div>
                <p>
                    SMA Negeri 1 Yogyakarta telah menjadi bagian tak terpisahkan dari perjalanan Yogyakarta sebagai kota pendidikan sejak tahun 1957...
                </p>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">INFO SEKOLAH</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <img src="https://via.placeholder.com/80" alt="Info 1" class="img-fluid me-3">
                        <div>
                            <small>27 JUL 2025</small>
                            <h6>Pembagian Ruang Seleksi...</h6>
                            <p class="text-muted small">Berikut ini pembagian ruang seleksi mata pelajaran pilihan...</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="https://via.placeholder.com/80" alt="Info 2" class="img-fluid me-3">
                        <div>
                            <small>20 JUL 2025</small>
                            <h6>Pengaturan Waktu KBM...</h6>
                            <p class="text-muted small">Diberitahukan kepada seluruh murid dan guru SMAN 1 Yogyakarta...</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 mb-4">
                <h5 class="fw-bold mb-3">AGENDA SEKOLAH</h5>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start mb-3">
                        <img src="https://via.placeholder.com/80" alt="Agenda 1" class="img-fluid me-3">
                        <div>
                            <small>18 APR 2020</small>
                            <h6>Surat Edaran Kelulusan...</h6>
                            <p class="text-muted small">Surat Edaran Kelulusan Siswa Kelas XII Tahun Ajaran 2019/2020...</p>
                        </div>
                    </li>
                    <li class="d-flex align-items-start mb-3">
                        <img src="https://via.placeholder.com/80" alt="Agenda 2" class="img-fluid me-3">
                        <div>
                            <small>13 MEI 2019</small>
                            <h6>Pembagian Laporan Hasil...</h6>
                            <p class="text-muted small">Pembagian laporan hasil belajar siswa akan dilaksanakan pada...</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr class="my-4">
    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <p class="text-white mb-0">
                &copy; Copyright 2019. All Rights Reserved By <span class="text-info fw-bold">ICT Teladan</span>
            </p>
        </div>
    </div>
</div>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
