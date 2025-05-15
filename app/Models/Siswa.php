<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'username',
        'nama',
        'nis',
        'kelas',
    ];

    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
