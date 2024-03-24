<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data mahasiswa
        $mahasiswas = [
            [
                'nama' => 'John Doe',
                'nim' => '123456789',
                'alamat' => 'Jl. Contoh No. 123',
                'tanggal_lahir' => '1998-05-20',
                'gender' => 'Laki-laki',
                'usia' => 23,
            ],
            [
                'nama' => 'Jane Doe',
                'nim' => '987654321',
                'alamat' => 'Jl. Contoh No. 456',
                'tanggal_lahir' => '1999-07-15',
                'gender' => 'Perempuan',
                'usia' => 22,
            ],
            // Tambahkan data mahasiswa lainnya sesuai kebutuhan
        ];

        // Insert data mahasiswa ke dalam database
        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}
