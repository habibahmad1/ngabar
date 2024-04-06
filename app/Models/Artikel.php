<?php

namespace App\Models;


class Artikel
{
    private static $artikels = [
        [
            "judul" => "Post Pertama",
            "slug" => "post-pertama",
            "penulis" => "Tohsaka Sparkle",
            "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel commodi laborum corporis adipisci facere, explicabo facilis necessitatibus omnis nam maxime, dolorem eaque, voluptatum nesciunt reiciendis id ut velit! Ut, iusto impedit libero sunt velit assumenda, quo non reprehenderit optio quisquam distinctio. Natus ab odio adipisci necessitatibus, dolorem nostrum dolorum nihil sunt, iusto architecto illo molestias consequatur earum dolores illum voluptate."
        ], [
            "judul" => "Post Kedua",
            "slug" => "post-kedua",
            "penulis" => "Shido Maret",
            "artikelPost" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel commodi laborum corporis adipisci facere, explicabo facilis necessitatibus omnis nam maxime, dolorem eaque, voluptatum nesciunt reiciendis id ut velit! Ut, iusto impedit libero sunt velit assumenda, quo non reprehenderit optio quisquam distinctio. Natus ab odio adipisci necessitatibus, dolorem nostrum dolorum nihil sunt, iusto architecto illo molestias consequatur earum dolores illum voluptate. Reprehenderit optio quisquam distinctio. Natus ab odio adipisci necessitatibus, dolorem nostrum dolorum nihil sunt, iusto architecto illo molestias consequatur earum dolores illum voluptate"
        ]
    ];

    public static function all()
    {
        return collect(self::$artikels);
    }

    public static function find($slug)
    {
        $artikel = static::all();

        return $artikel->firstWhere('slug', $slug);
    }
}
