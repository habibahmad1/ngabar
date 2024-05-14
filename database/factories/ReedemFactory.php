<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reedem>
 */
class ReedemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "code" => Str::random(12),
            "duration" => 3600,
            "kuota" => random_int(10, 50),
            "user_id" => mt_rand(1, 5)
        ];
    }
}
