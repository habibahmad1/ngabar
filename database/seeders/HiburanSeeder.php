<?php

namespace Database\Seeders;

use App\Models\Hiburan;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HiburanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hiburan::factory(4)->create();
    }
}
