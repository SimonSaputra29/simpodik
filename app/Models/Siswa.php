<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nama_pengguna',
        'nama',
        'nis',
        'kelas',
        'password',
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
