@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h5 class="fw-bold mb-3">Tambah Data Siswa</h5>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nama_sekolah" class="form-label">NISN</label>
                        <input type="text" class="form-control" id="nisn" name="nisn" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kepala_sekolah" class="form-label">Nama_Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="npsn" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kontak" class="form-label">Tahun Masuk</label>
                        <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="" class="btn btn-secondary">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
