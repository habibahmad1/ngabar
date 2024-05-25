<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ReedemController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KategoriGaleriController;
use App\Http\Controllers\MemberController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route ke semua KategoriGaleri
Route::get('/kategoriGaleri', [KategoriGaleriController::class, 'allKategori']);

// Route ke tiap post KategoriGaleri
Route::get('/kategoriGaleri/{kategoriGaleri:slug}', [KategoriGaleriController::class, 'index2']);

// Route ke detail galery
Route::get('/detail/{galeri}', [GaleriController::class, 'detail']);

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
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
Route::get('/categories', function () {
    return view('categories', [
        "title" => 'All Categories',
        "categories" => Category::all()
    ]);
});

// Route ke user posting
Route::get('/authors/{author:username}', [UserController::class, "index"]);

// Route ke user galeri
Route::get('/uploaded/{uploaded:username}', [UserController::class, "index2"]);

// Route ke Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// Route untuk Login Form
Route::post('/login', [LoginController::class, 'authenticate']);

// Route untuk Logout Form
Route::post('/logout', [LoginController::class, 'logout']);

// Route ke Google
Route::get('/googlelogin', [GoogleLoginController::class, 'handleGoogleCallback']);

// Route untuk Daftar
Route::post('/register', [RegisterController::class, 'store']);

// Route untuk Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');


// Route untuk slug
Route::get('/dashboard/artikel/cekSlug', [DashboardPostController::class, 'cekSlug']);

// Route untuk Dashboard pada hal My Artikel
Route::resource('/dashboard/artikel', DashboardPostController::class)->middleware('auth');

// Route untuk tampil form lupa pw
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request')->middleware('guest');


// Route untuk kirim email
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email')->middleware('guest');

// Untuk tampil form Lupa PW
Route::get('reset-password/{token}/{email}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');

// Untuk proses form lupa pw
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

// Route untuk my profil
Route::get('/dashboard/profil', function () {
    return view('dashboard.profil', [
        'dataProfil' => User::all()
    ]);
});

// Route untuk data page
Route::get('/dashboard/data', function () {
    return view('dashboard.data', [
        'data' => User::all()
    ]);
})->middleware('admin');

// Route untuk Redem Code
Route::get('/dashboard/reedem', [ReedemController::class, 'index'])->middleware('auth');

// Route untuk Form Redeem Code
Route::post('/dashboard/reedem', [ReedemController::class, 'reedem'])->name('reedem')->middleware('auth');

// Route untuk Admin Category
Route::resource('/dashboard/categories/', AdminCategoryController::class)->except('show')->middleware('admin');

// Route Member Online
Route::get('/dashboard/member', [MemberController::class, 'getOnlineUsers'])->middleware('member');
