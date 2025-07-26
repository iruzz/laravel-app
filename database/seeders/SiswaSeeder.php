<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Carbon;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        Siswa::insert([
            [
                'nama' => 'Budi Santoso',
                'kelas' => 'XII RPL 1',
                'umur' => 17,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Siti Aminah',
                'kelas' => 'XII RPL 2',
                'umur' => 18,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Ahmad Fauzi',
                'kelas' => 'XI TKJ 1',
                'umur' => 16,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Nur Aisyah',
                'kelas' => 'X RPL 3',
                'umur' => 15,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
