<?php

namespace Database\Seeders;

use App\Models\Konten;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konten::factory(4)->create();
    }
}
