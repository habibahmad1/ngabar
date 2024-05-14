<?php

namespace Database\Seeders;

use App\Models\Reedem;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReedemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reedem::factory(10)->create();
    }
}
