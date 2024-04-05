<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('beranda', [
        'title' => 'Beranda'
    ]);
});

Route::get('/artikel', function () {
    // Simulasi Data
    $dataArtikel = [
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
    return view('artikel',  [
        'title' => 'Artikel',
        "article" => $dataArtikel
    ]);
});

Route::get('/quran', function () {
    return view('quran',  [
        'title' => "Al-Qur'an"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri',  [
        'title' => 'Galeri'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
        "description" => "Tempat Diskusi Online",
        "image" => "kabah.jpg"
    ]);
});

// Rute ke setiap artikel
Route::get('/artikel/{slug}', function ($slug) {
    // Simulasi Data
    $dataArtikel = [
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

    $newArtikel = [];
    foreach ($dataArtikel as $post) {
        if ($post["slug"] === $slug) {
            $newArtikel = $post;
        }
    }
    return view('setiapArtikel', [
        "title" => "Semua Artikel",
        "articlePost" => $newArtikel
    ]);
});
