<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Konten>
 */
class KontenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pengetahuan = [
            'fJMklZ3Bo0c',
            'GiuSig8yNok',
            '_yugUpt3yqk',
            'mseDuZB6RjE'
        ];
        $randomPraise = $pengetahuan[array_rand($pengetahuan)];

        $kontenPengetahuan = $randomPraise;

        return [
            "user_id" => mt_rand(1, 5),
            "pengetahuan" => $kontenPengetahuan,
        ];
    }
}
