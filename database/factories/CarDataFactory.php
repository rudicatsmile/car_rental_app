<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarData>
 */
class CarDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merk' => fake()->name(),
            'model' => fake()->name(),
            'plat_no' => fake()->randomNumber(),
            'tarif' => fake()->randomNumber(4),
            'stock' => fake()->randomNumber(2)
           
        ];
    }
}
