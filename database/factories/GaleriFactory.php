<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galeri>
 */
class GaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "judul" => $this->faker->sentence(),
            "kategoriGaleri_id" => mt_rand(1, 5),
            "user_id" => mt_rand(1, 5)
        ];
    }
}
