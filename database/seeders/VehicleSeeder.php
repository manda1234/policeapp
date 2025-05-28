<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleSeeder extends Seeder
{
    public function run(): void
    {
        // Misalnya user_id = 1 untuk sementara
        Vehicle::create([
            'user_id' => 1,
            'license_plate' => 'B1234ABC',
            'type' => 'Motor',
            'brand' => 'Yamaha',
            'color' => 'Merah',
            'is_stolen' => false,
        ]);

        Vehicle::create([
            'user_id' => 1,
            'license_plate' => 'D9876XYZ',
            'type' => 'Mobil',
            'brand' => 'Toyota',
            'color' => 'Hitam',
            'is_stolen' => true,
        ]);
    }
}
