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
    return view('beranda');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/quran', function () {
    return view('quran');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/about', function () {
    return view('about', [
        "title" => "Ngabar",
        "description" => "Tempat Diskusi Online",
        "image" => "kabah.jpg"
    ]);
});
