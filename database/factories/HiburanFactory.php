<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hiburan>
 */
class HiburanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hiburan = [
            '2RjLFFUD8dk',
            '1r1RIFLAWOQ',
            'lapMx44bteE',
            '4u9K-FJqMuw'
        ];
        $randomPraise = $hiburan[array_rand($hiburan)];

        $kontenHiburan = $randomPraise;

        return [
            "user_id" => mt_rand(1, 5),
            "hiburan" => $kontenHiburan,
        ];
    }
}
