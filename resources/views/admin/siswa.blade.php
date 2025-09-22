@extends('admin.layout')
@section('content')

<div class="container mt-4">
<div class="d-flex justify-content-between px-4">
    <h5 class="fw-bold mb-3 text-dark">Daftar Sekolah</h5>
    <a href="{{ route('admin.siswa.create') }}" style="background:#0d47a1; color: rgb(249, 249, 249);" class="btn btn-primary rounded-3 pe-3 fw-bold">
        Tambah
    </a>
</div>
    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NISN</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tahun Masuk</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
