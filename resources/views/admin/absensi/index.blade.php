@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h3 class="mb-4 fw-bold">Form Absensi Siswa</h3>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" value="{{ $tanggal }}" required>
            </div>

            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Hadir</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Alpa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->nama }}</td>
                            @foreach (['hadir', 'izin', 'sakit', 'alpa'] as $status)
                                <td class="text-center">
                                    <input type="radio" name="absensi[{{ $siswa->id }}]" value="{{ $status }}"
                                        required>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary mt-3">Simpan Absensi</button>
        </form>
    </div>
@endsection
