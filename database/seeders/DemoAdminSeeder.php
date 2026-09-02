<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DemoAdminSeeder extends Seeder
{
    /**
     * Akun demo untuk panel admin (lokal / pengujian).
     * Kata sandi disimpan plain lalu di-hash otomatis lewat cast `hashed` di model User.
     */
    public function run(): void
    {
        User::query()->updateOrCreate(
            ['email' => 'superadmin@ppg-bjm.test'],
            [
                'name' => 'Super Admin Daerah',
                'password' => 'password',
            ],
        );

        User::query()->updateOrCreate(
            ['email' => 'admin.desa@ppg-bjm.test'],
            [
                'name' => 'Admin Desa (demo)',
                'password' => 'password',
            ],
        );

        User::query()->updateOrCreate(
            ['email' => 'pengajar@ppg-bjm.test'],
            [
                'name' => 'Pengajar (demo)',
                'password' => 'password',
            ],
        );

        User::query()->updateOrCreate(
            ['email' => 'admin@ppg-bjm.test'],
            [
                'name' => 'Pengguna Baru',
                'password' => 'password123',
            ],
        );
    }
}
