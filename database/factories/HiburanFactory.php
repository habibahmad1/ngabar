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

        $judul = [
            'Serem nih Game nya',
            'Game yang Lagi Viral',
            'Yang Takut Horor Skip Ya!',
            'Seru Banget nih Video'
        ];
        $randomPraises = $judul[array_rand($judul)];
        $judulHiburan = $randomPraises;

        $judulSlug = str_replace(' ', '-', $judulHiburan);

        return [
            "user_id" => mt_rand(1, 5),
            "judul" => $judulHiburan,
            "slug" => $judulSlug,
            "hiburan" => $kontenHiburan,
        ];
    }
}
