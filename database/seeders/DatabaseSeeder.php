<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Artikel;
use App\Models\Galeri;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     "name" => "Habib",
        //     "email" => "habib@mail.com",
        //     "password" => bcrypt("123"),
        // ]);
        User::create([
            "name" => "Robin",
            "username" => "Robin",
            "google_id" => "1231723",
            "noHp" => "0837727272",
            "role" => "Super Admin",
            "email" => "robin@gmail.com",
            "password" => bcrypt("password"),
        ]);

        User::factory(5)->create();


        Category::factory()->tutorial()->create();
        Category::factory()->informasi()->create();
        Category::factory()->personal()->create();
        Category::factory()->random()->create();

        $this->call(GaleriSeeder::class);

        $this->call(KomentarSeeder::class);

        $this->call(ReedemSeeder::class);

        $this->call(KategoriGaleriSeeder::class);

        // Category::create([
        //     "nama" => "Tutorial",
        //     "slug" => "tutorial",
        // ]);
        // Category::create([
        //     "nama" => "Informasi",
        //     "slug" => "informasi",
        // ]);
        // Category::create([
        //     "nama" => "Personal",
        //     "slug" => "personal",
        // ]);

        Artikel::factory(40)->create();

        // Artikel::create([
        //     "judul" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
        //     "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Artikel::create([
        //     "judul" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
        //     "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Artikel::create([
        //     "judul" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
        //     "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);
        // Artikel::create([
        //     "judul" => "Judul Empat",
        //     "slug" => "judul-empat",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
        //     "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);
    }
}
