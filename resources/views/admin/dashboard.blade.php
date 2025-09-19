@extends('admin.layout')
@section('content')
<div class="container-fluid px-4">
    <h1 class="h2 mb-4"></h1>

    <!-- Statistics Cards -->
    <div class="row g-4 mb-4">
    <div class="col-xl-3 col-md-6">
        <div class="card text-white border-0 shadow-lg stat-card" style="background: linear-gradient(135deg,#4e73df,#224abe);">
            <div class="card-body position-relative overflow-hidden">
                <i class="fas fa-users fa-3x position-absolute opacity-25 top-50 end-0 translate-middle-y me-3"></i>
                <p class="mb-1 fw-bold">Total Warga</p>
                {{-- <h3 class="mb-0">{{ number_format($totalUsers) }}</h3> --}}
                <small class="text-light">Aktif</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card text-white border-0 shadow-lg stat-card" style="background: linear-gradient(135deg,#1cc88a,#0f9d58);">
            <div class="card-body position-relative overflow-hidden">
                <i class="fas fa-dollar-sign fa-3x position-absolute opacity-25 top-50 end-0 translate-middle-y me-3"></i>
                <p class="mb-1 fw-bold">Total Iuran</p>
                {{-- <h3 class="mb-0">Rp {{ number_format($totalAmount, 0, ',', '.') }}</h3> --}}
                <small class="text-light">Terbayar</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card text-white border-0 shadow-lg stat-card" style="background: linear-gradient(135deg,#f6c23e,#d39e00);">
            <div class="card-body position-relative overflow-hidden">
                <i class="fas fa-clock fa-3x position-absolute opacity-25 top-50 end-0 translate-middle-y me-3"></i>
                <p class="mb-1 fw-bold">Menunggu Konfirmasi</p>
                {{-- <h3 class="mb-0">{{ number_format($pendingApprovals) }}</h3> --}}
                <small class="text-light">Pembayaran</small>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card text-white border-0 shadow-lg stat-card" style="background: linear-gradient(135deg,#36b9cc,#117a8b);">
            <div class="card-body position-relative overflow-hidden">
                <i class="fas fa-calendar-check fa-3x position-absolute opacity-25 top-50 end-0 translate-middle-y me-3"></i>
                <p class="mb-1 fw-bold">Total Transaksi</p>
                {{-- <h3 class="mb-0">{{ number_format($totalPayments) }}</h3> --}}
                <small class="text-light">Semua waktu</small>
            </div>
        </div>
    </div>
</div>

<style>
.stat-card {
    border-radius: 15px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.stat-card:hover {
    transform: translateY(5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.3);
}
</style>
<style>
    .table-row-hover:hover {
        background-color: rgba(0, 242, 254, 0.05);
        transition: background-color 0.3s ease;
    }
</style>

</div>
@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
@endpush


@endsection
