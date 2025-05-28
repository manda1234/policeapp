<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Jalankan semua seeder.
     */
    public function run(): void
    {
        // Tambahkan seeder yang kamu buat di sini
        $this->call(VehicleSeeder::class);
    }
}
