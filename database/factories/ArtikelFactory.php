<?php

namespace Database\Factories;

use Clockwork\Request\Request;
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
        // $artikelPost = ; // Menghasilkan beberapa paragraf sebagai satu string

        // Memisahkan teks menjadi paragraf
        // $paragraf = explode("\n\n", $artikelPost);

        // Mengambil dua paragraf pertama
        // $excerpt = implode("\n\n", array_slice($paragraf, 0, 2));

        return [
            "judul" => $judul,
            "slug" => $slug,
            "excerpt" => $this->faker->paragraph(mt_rand(5, 6)),
            "artikelPost" => collect($this->faker->paragraphs(mt_rand(10, 20)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''), // Menggunakan $artikelPost asli untuk artikel lengkap
            "category_id" => mt_rand(1, 4),
            "user_id" => mt_rand(1, 5)
        ];
    }
}
