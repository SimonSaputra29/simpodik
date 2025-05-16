@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Pilih Kelas</h3>
        <select class="form-select" onchange="if(this.value) window.location.href=this.value;">
            <option value="">-- Pilih Kelas --</option>
            @foreach ($kelasList as $kelas)
                <option value="{{ route('absensi.form', $kelas->id) }}">{{ $kelas->nama_kelas }}</option>
            @endforeach
        </select>
    </div>
@endsection
