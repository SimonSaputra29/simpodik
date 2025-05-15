@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-5">
                        <h2 class="mb-4 fw-bold">Absensi Sekolah</h2>
                        <p class="mb-4 text-muted">Klik tombol di bawah ini untuk melakukan absensi hari ini.</p>
                        <a href="{{ url('/absensi') }}" class="btn btn-primary btn-lg rounded-pill px-4">
                            <i class="bi bi-check-circle me-2"></i> Absen Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
