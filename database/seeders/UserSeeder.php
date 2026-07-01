<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'IT Admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
            ],
            [
                'name' => 'Kepala Sekolah',
                'email' => 'principal@gmail.com',
                'role' => 'principal',
            ],
            [
                'name' => 'Guru Budi',
                'email' => 'teacher@gmail.com',
                'role' => 'teacher',
            ],
            [
                'name' => 'Siswa Tono',
                'email' => 'student@gmail.com',
                'role' => 'student',
            ],
            [
                'name' => 'Orang Tua Tono',
                'email' => 'parent@gmail.com',
                'role' => 'parent',
            ],
        ];

        foreach ($users as $userData) {
            if (User::where('email', $userData['email'])->exists()) {
                continue;
            }

            $user = User::factory()->create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'role' => $userData['role'],
            ]);

        }
    }
}
