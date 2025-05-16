@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Absensi Harian</h3>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('absensi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required
                    value="{{ old('tanggal', date('Y-m-d')) }}">
                @error('tanggal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswas as $siswa)
                        <tr>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->kelas ?? '-' }}</td>
                            <td>
                                <select name="absensi[{{ $siswa->id }}]" class="form-select" required>
                                    <option value="">-- Pilih Status --</option>
                                    @foreach (['Hadir', 'Izin', 'Sakit', 'Alpha'] as $status)
                                        <option value="{{ $status }}"
                                            {{ old('absensi.' . $siswa->id) == $status ? 'selected' : '' }}>
                                            {{ $status }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Simpan Absensi</button>
        </form>
    </div>
@endsection
