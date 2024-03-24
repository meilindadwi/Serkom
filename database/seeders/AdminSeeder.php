<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data admin
        $admins = [
            [
                'nama' => 'Admin Pertama',
                'email' => 'admin1@example.com',
                'password' => bcrypt('password1'), // Menggunakan bcrypt untuk mengenkripsi password
            ],
            [
                'nama' => 'Admin Kedua',
                'email' => 'admin2@example.com',
                'password' => bcrypt('password2'),
            ],
            // Tambahkan data admin lainnya sesuai kebutuhan
        ];

        // Insert data admin ke dalam database
        foreach ($admins as $admin) {
            Admin::create($admin);
        }
    }
}
