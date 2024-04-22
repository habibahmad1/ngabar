<?php

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ArtikelController;




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


Route::get('/quran', function () {
    return view('quran',  [
        'title' => "Al-Qur'an"
    ]);
});

// Route ke semua galery
Route::get('/galeri', [GaleriController::class, 'index']);

// Route ke detail galery
Route::get('/detail/{galeri}', [GaleriController::class, 'detail']);

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
        "description" => "Tempat Diskusi Online",
        "image" => "kabah.jpg"
    ]);
});

// Route semua artikel
Route::get('/artikel', [ArtikelController::class, "index"]);


// Rute ke setiap artikel
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, "show"]);

// Route ke category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        "title" => $category->nama,
        "artikelPost" => $category->artikel,
        "category" => $category->nama
    ]);
});

// Route ke Semua category
Route::get('/categories', function (Category $category) {
    return view('categories', [
        "title" => 'All Categories',
        "categories" => Category::all()
    ]);
});

// Route ke user posting
Route::get('/authors/{author:username}', [UserController::class, "index"]);
