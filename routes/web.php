<?php

use App\Http\Controllers\ArtikelController;
use App\Models\Artikel;
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

// Route semua artikel
Route::get('/artikel', [ArtikelController::class, "index"]);


// Rute ke setiap artikel
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, "show"]);
