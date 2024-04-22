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
            "deskripsi" => $this->faker->paragraph(3, 5),
            "img" => $this->faker->word() . '.jpg',
            "kategoriGaleri_id" => mt_rand(1, 4),
            "user_id" => mt_rand(1, 5)
        ];
    }
}
