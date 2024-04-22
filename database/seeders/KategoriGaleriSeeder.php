<?php

namespace Database\Seeders;

use App\Models\KategoriGaleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriGaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriGaleri::factory()->kegiatan()->create();
        KategoriGaleri::factory()->pemandangan()->create();
        KategoriGaleri::factory()->personal()->create();
        KategoriGaleri::factory()->bebas()->create();
    }
}
