{{-- resources/views/auth/login.blade.php --}}

@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <div class="card shadow-sm p-4" style="min-width: 350px;">
            <h3 class="mb-3 text-center">{{ $title }}</h3>

            {{-- Pesan error --}}
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Pesan sukses --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="password" required>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Tombol Masuk --}}
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
            </form>

            <div class="mt-3 text-center">
                {{-- <a href="{{ route('register') }}">Belum punya akun? Daftar</a> --}}
            </div>
        </div>
    </div>
@endsection
