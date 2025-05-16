<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('absensi.index', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'absensi' => 'required|array',
        ]);

        foreach ($request->absensi as $siswa_id => $status) {
            Absensi::updateOrCreate(
                ['siswa_id' => $siswa_id, 'tanggal' => $request->tanggal],
                ['status' => $status]
            );
        }

        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil disimpan');
    }
}
