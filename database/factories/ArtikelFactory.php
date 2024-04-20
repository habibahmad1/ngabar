<?php

namespace Database\Factories;

use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $judul = $this->faker->sentence(mt_rand(2, 7));
        $slug = Str::slug($judul);
        return [
            "judul" => $judul,
            "slug" => $slug,
            "excerpt" => $this->faker->paragraph(),
            "artikelPost" => $this->faker->paragraph(mt_rand(5, 10)),
            "category_id" => mt_rand(1, 3),
            "user_id" => mt_rand(1, 5)
        ];
    }
}
