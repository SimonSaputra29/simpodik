@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h3>Data Siswa</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->nama }}</td>
                        <td>{{ $siswa->nis }}</td>
                        <td>{{ $siswa->kelas }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', $siswa) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('siswa.destroy', $siswa) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
