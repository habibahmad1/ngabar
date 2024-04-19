<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Artikel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Habib",
            "email" => "habib@mail.com",
            "password" => bcrypt("123"),
        ]);
        User::create([
            "name" => "Robin",
            "email" => "robin@mail.com",
            "password" => bcrypt("123"),
        ]);

        Category::create([
            "nama" => "Tutorial",
            "slug" => "tutorial",
        ]);
        Category::create([
            "nama" => "Personal",
            "slug" => "personal",
        ]);

        Artikel::create([
            "judul" => "Judul Pertama",
            "slug" => "judul-pertama",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
            "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
            "category_id" => 1,
            "user_id" => 1
        ]);
        Artikel::create([
            "judul" => "Judul Kedua",
            "slug" => "judul-kedua",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
            "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
            "category_id" => 1,
            "user_id" => 1
        ]);
        Artikel::create([
            "judul" => "Judul Ketiga",
            "slug" => "judul-ketiga",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
            "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
            "category_id" => 2,
            "user_id" => 2
        ]);
        Artikel::create([
            "judul" => "Judul Empat",
            "slug" => "judul-empat",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum",
            "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam ullam deleniti natus eligendi ab porro praesentium. Consectetur odit cupiditate ipsum, reprehenderit qui itaque vel molestias delectus laboriosam eligendi at quae blanditiis commodi ut quia dignissimos id expedita aperiam ducimus ad! Itaque suscipit, voluptate eaque, cum libero autem alias quas nam molestiae nostrum quibusdam ullam voluptas",
            "category_id" => 2,
            "user_id" => 2
        ]);
    }
}
