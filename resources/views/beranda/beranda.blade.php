@extends('beranda.layout')
@section('content')


<!-- Carousel / Hero -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="{{ asset('assets/foto/kapal.png') }}" class="d-block w-100" alt="Slide 1" style="height:90vh;object-fit:cover;">

            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                <h5 class="text-white mb-2">Selamat Datang</h5>
                <h1 class="fw-bold text-warning">SMK NEGERI PERKAPALAN</h1>
                <p class="text-white">Onlimitéiert Wëssen</p>
            </div>
        </div>

         <div class="carousel-item">
            <img src="{{ asset('assets/foto/logo1.png') }}" class="d-block w-100" alt="Slide 2" style="height:90vh;object-fit:cover;">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                {{-- <h5 class="text-white mb-2">Selamat Datang</h5>
                <h1 class="fw-bold text-warning">Judul Slide 2</h1>
                <p class="text-white">Deskripsi Slide 2</p> --}}
            </div>
        </div>
    </div>



<section id="pendidikan-section" class="py-5" style="background: linear-gradient(to right, #001f44, #007bff); color: white;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-4 fw-bold mb-4">Pendidikan</h2>
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-university fa-3x me-3" style="color: #FFD700;"></i>
                    <div>
                        <h4 class="fw-bold mb-1">Fakultas</h4>
                        <p class="mb-0">
                            Universitas Sahid Surakarta memiliki 2 fakultas unggulan. Kamu bisa memilih jurusan sesuai minatmu dengan mengenal kedua fakultas ini.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <i class="fas fa-book fa-3x me-3" style="color: #FFD700;"></i>
                    <div>
                        <h4 class="fw-bold mb-1">Program Studi</h4>
                        <p class="mb-0">
                            Universitas Sahid Surakarta menawarkan 9 Program Studi jenjang Sarjana dan 1 Program Pendidikan Profesi Ners yang berbasis kurikulum MBKM dan siap kerja.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <i class="fas fa-users fa-3x me-3" style="color: #FFD700;"></i>
                    <div>
                        <h4 class="fw-bold mb-1">Kegiatan Mahasiswa</h4>
                        <p class="mb-0">
                            Ada banyak kegiatan internal kampus yang bisa kamu ikuti agar kamu dapat melatih jiwa kepemimpinan selagi di perkuliahan.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-2">
                    <div class="col-12 py-4 px-4 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                        <div class="d-flex align-items-center">
                            <div class="pe-4">
                                <h4 class="fw-bold">Kegiatan Mahasiswa</h4>
                                <p class="mb-0">
                                    Wadah aktivitas kemahasiswaan luar kelas untuk mengembangkan minat, bakat, dan keahlian tertentu.
                                </p>
                            </div>
                            <img src="https://images.unsplash.com/photo-1518623489815-f5b9d3e5e4ac?auto=format&fit=crop&w=400&h=400&q=80"
                                alt="Kegiatan Mahasiswa"
                                class="img-fluid rounded shadow">
                        </div>
                    </div>
                    <div class="col-12 py-4 px-4 rounded" style="background-color: rgba(255, 255, 255, 0.1);">
                        <div class="d-flex align-items-center">
                            <div class="pe-4">
                                <h4 class="fw-bold">Publikasi & Penelitian</h4>
                                <p class="mb-0">
                                    Usahid Surakarta mendorong dosen dan mahasiswa untuk melakukan dan mengembangkan berbagai penelitian yang berorientasi untuk memenuhi kebutuhan bangsa.
                                </p>
                            </div>
                            <img src="https://images.unsplash.com/photo-1599839447477-fe178c18731d?auto=format&fit=crop&w=400&h=400&q=80"
                                alt="Publikasi & Penelitian"
                                class="img-fluid rounded shadow">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Tombol navigasi -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script>

</script>

@endsection
