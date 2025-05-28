<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'license_plate' => strtoupper(Str::random(2)) . rand(1000, 9999) . strtoupper(Str::random(2)),
            'type' => $this->faker->randomElement(['Motor', 'Mobil', 'Truk']),
            'brand' => $this->faker->company(),
            'color' => $this->faker->safeColorName(),
            'is_stolen' => $this->faker->boolean(20),
        ];
    }
}
