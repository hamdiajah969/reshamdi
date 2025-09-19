@extends('admin.layout')
@section('content')

<div class="container mt-4">
<div class="d-flex justify-content-between px-4">
    <h5 class="fw-bold mb-3 text-dark">Daftar Sekolah</h5>
    <a href="{{ route('admin.profile.create') }}" style="background:#0d47a1; color: rgb(249, 249, 249);" class="btn btn-primary rounded-3 pe-3 fw-bold">
        Tambah
    </a>
</div>
    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Sekolah</th>
                        <th scope="col">Kepala Sekolah</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Logo</th>
                        <th scope="col">NPSN</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Visi Misi</th>
                        <th scope="col">Tahun Berdiri</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($profile_sekolah as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_sekolah }}</td>
                        <td>{{ $item->kepala_sekolah }}</td>
                        <td>
                            @if($item->foto)
                                <img src="{{ asset('storage/'.$item->foto) }}" alt="foto" style="height:40px">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td>
                            @if($item->logo)
                                <img src="{{ asset('storage/'.$item->logo) }}" alt="logo" style="height:40px">
                            @else
                                <span class="text-muted">Tidak ada</span>
                            @endif
                        </td>
                        <td>{{ $item->npsn }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->kontak ?? '-' }}</td>
                        <td>{{ $item->visi_misi }}</td>
                        <td>{{ $item->tahun_berdiri }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            {{-- <a href="{{ route('',$item->id) }}" --}}
                               class="btn btn-sm btn-primary">
                                Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
