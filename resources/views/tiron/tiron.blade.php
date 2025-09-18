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
                <div class="title">SMA Integral Luqman al Hakim</div>
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







<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Kapal</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

    <!-- Navbar Atas (Info Kontak) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1">
        <div class="container d-flex justify-content-start">
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

    <!-- Navbar Utama -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d47a1;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://via.placeholder.com/40x40/0d47a1/ffffff?text=SK" alt="Logo" height="40" class="me-2">
                SMK Kapal
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigasi">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
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
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item"><a class="btn nav-link" href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container my-4">
        <div class="row">
            <div class="col-12">
                <h2>Selamat Datang di SMK Kapal</h2>
                <p>Sekolah teknik kapal adalah institusi pendidikan yang berfokus pada ilmu rekayasa dan teknologi maritim, khususnya dalam perancangan, pembangunan, dan pemeliharaan kapal.</p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer style="background-color: #0d47a1;" class="text-white pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://via.placeholder.com/70x70/0d47a1/ffffff?text=SK" alt="Logo Sekolah" height="70" class="me-3">
                        <h5 class="fw-bold m-0">SMK Kapal</h5>
                    </div>
                    <p>
                        Sekolah teknik kapal adalah institusi pendidikan yang berfokus pada ilmu rekayasa dan teknologi maritim, khususnya dalam perancangan, pembangunan, dan pemeliharaan kapal.
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

    <!-- JavaScript untuk efek pada navbar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mengatur semua konten navbar atas ke kiri
            const topNavbar = document.querySelector('.navbar-dark.bg-dark');
            if (topNavbar) {
                topNavbar.querySelector('.container').classList.remove('justify-content-center');
                topNavbar.querySelector('.container').classList.add('justify-content-start');
            }

            // Efek hover pada item navbar
            const navItems = document.querySelectorAll('.nav-link');
            navItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease';
                    this.style.transform = 'scale(1.05)';
                    this.style.color = '#ffffff';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                    if (this.classList.contains('active')) {
                        this.style.color = '#ffffff';
                    } else {
                        this.style.color = 'rgba(255, 255, 255, 0.75)';
                    }
                });
            });

            // Efek scroll untuk navbar utama
            const mainNavbar = document.querySelector('.navbar[style*="background-color: #0d47a1"]');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 50) {
                    mainNavbar.style.padding = '0.5rem 0';
                    mainNavbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.3)';
                } else {
                    mainNavbar.style.padding = '';
                    mainNavbar.style.boxShadow = '';
                }
            });

            // Efek pada info kontak di navbar atas
            const contactItems = document.querySelectorAll('.navbar-dark.bg-dark .d-flex');
            contactItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(5px)';
                    this.style.transition = 'all 0.3s ease';
                });

                item.addEventListener('mouseleave', function() {
                    this.style.transform = '';
                });
            });
        });
    </script>
</body>
</html>
