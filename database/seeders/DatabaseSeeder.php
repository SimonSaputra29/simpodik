<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role' => 'Admin',
<<<<<<< HEAD
        ]);

        User::create([
            'name' => 'Guru',
            'email' => 'guru@gmail.com',
            'password' => bcrypt('guru'),
            'role' => 'Guru',
        ]);

        Siswa::create([
            'nama_pengguna'  => 'Siswa',
            'nama'  => 'Siswa',
            'nis' => 1220000,
            'kelas' => 'XII RPL 1',
            'password' => bcrypt('siswa'),

=======
>>>>>>> 8893e6f8bbe8963cb2e34cd9b19d4e8059f745e6
        ]);
    }
}
