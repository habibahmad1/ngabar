<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KategoriGaleri>
 */
class KategoriGaleriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Default definition
            'nama' => $this->faker->word,
            'slug' => $this->faker->slug,
        ];
    }

    // State for kegiatan category
    public function kegiatan()
    {
        return $this->state(function (array $attributes) {
            return [
                'nama' => 'Kegiatan',
                'slug' => 'kegiatan',
            ];
        });
    }

    // State for Informasi category
    public function pemandangan()
    {
        return $this->state(function (array $attributes) {
            return [
                'nama' => 'Pemandangan',
                'slug' => 'pemandangan',
            ];
        });
    }

    // State for Personal category
    public function personal()
    {
        return $this->state(function (array $attributes) {
            return [
                'nama' => 'Personal',
                'slug' => 'personal',
            ];
        });
    }
    // State for ilmu category
    public function ilmu()
    {
        return $this->state(function (array $attributes) {
            return [
                'nama' => 'Ilmu',
                'slug' => 'ilmu',
            ];
        });
    }

    // State for Random category
    public function random()
    {
        return $this->state(function (array $attributes) {
            return [
                'nama' => 'Random',
                'slug' => 'random',
            ];
        });
    }
}
