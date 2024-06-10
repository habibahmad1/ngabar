<?php

use App\Models\User;
use App\Models\Galeri;
use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReedemController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HiburanController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CashNoteController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AllGaleriController;
use App\Http\Controllers\AllArtikelController;
use App\Http\Controllers\GaleriPostController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\KategoriGaleriController;

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
})->middleware('member');


Route::get('/quran', [QuranController::class, 'index'])->middleware('member');
Route::get('/quran/detail/{id}', [QuranController::class, 'detailSurah'])->middleware('member');

// Route ke semua galery
Route::get('/galeri', [GaleriController::class, 'index'])->middleware('member');

// Route ke semua KategoriGaleri
Route::get('/kategoriGaleri', [KategoriGaleriController::class, 'allKategori'])->middleware('member');

// Route ke tiap post KategoriGaleri
Route::get('/kategoriGaleri/{kategoriGaleri:slug}', [KategoriGaleriController::class, 'index2'])->middleware('member');

// Route ke detail galery
Route::get('/detail/{galeri}', [GaleriController::class, 'detail'])->middleware('member');

Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang Kami",
    ]);
})->middleware('member');

// Route semua artikel
Route::get('/artikel', [ArtikelController::class, "index"])->middleware('member');


// Rute ke setiap artikel
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, "show"]);

// Rute ke simpan artikel komen
Route::post('/artikel/{artikel:slug}/komentar', [ArtikelController::class, 'store']);

// Rute ke delete artikel komen
Route::delete('/artikel/{komentar:id}/deletekomen', [ArtikelController::class, 'destroy']);


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
    return view('dashboard.index', [
        'data' => Artikel::where('user_id', auth()->user()->id)->get(),
        'galeri' => Galeri::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware(['auth', 'member']);


// Route untuk slug
Route::get('/dashboard/artikel/cekSlug', [DashboardPostController::class, 'cekSlug']);

// Route untuk Dashboard pada hal My Artikel
Route::resource('/dashboard/artikel', DashboardPostController::class)->middleware(['auth', 'member']);

// Route untuk tampil form lupa pw
Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request')->middleware('guest');


// Route untuk kirim email
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email')->middleware('guest');

// Untuk tampil form Lupa PW
Route::get('reset-password/{token}/{email}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset')->middleware('guest');

// Untuk proses form lupa pw
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('password.update');

// Route untuk data page
Route::get('/dashboard/data', function () {
    return view('dashboard.data', [
        'data' => User::all()
    ]);
})->middleware(['role:Admin,Super Admin', 'member']);

// Route untuk Redem Code
Route::get('/dashboard/reedem', [ReedemController::class, 'index'])->middleware(['auth', 'member']);

// Route untuk Form Redeem Code
Route::post('/dashboard/reedem', [ReedemController::class, 'reedem'])->name('reedem')->middleware('auth');

// Route Member Online
Route::get('/dashboard/member', [MemberController::class, 'getOnlineUsers'])->middleware(['member', 'auth']);

// Route jadi Admin
Route::post('/dashboard/makeAdmin', [UserController::class, 'makeAdmin'])->name('user.makeAdmin')->middleware('role:Admin,Super Admin');

// Route jadi Member
Route::post('/dashboard/makeMember', [UserController::class, 'makeMember'])->name('user.makeMember')->middleware('role:Admin,Super Admin');

// Route Delete User
Route::delete('/dashboard/deleteUser', [UserController::class, 'deleteUser'])->name('user.deleteUser')->middleware('role:Admin,Super Admin');

// Route Buat Galeri
Route::resource('/dashboard/galeri', GaleriPostController::class)->middleware(['auth', 'member']);

// Route Settings
Route::get('/dashboard/setting', [SettingController::class, 'index'])->name('settings')->middleware(['member', 'auth']);

// Route untuk my profil
Route::resource('/dashboard/profil', ProfilController::class)->middleware(['member', 'auth']);

// Route Pengetahuan Index
Route::resource('/dashboard/pengetahuan', KontenController::class)
    ->middleware(['member', 'auth', 'role:Admin,Super Admin']);

// Route Pengetahuan Index
Route::resource('/dashboard/hiburan', HiburanController::class)
    ->middleware(['member', 'auth', 'role:Admin,Super Admin']);

//Route All Artikel User
Route::resource('/dashboard/allartikel', AllArtikelController::class)->middleware(['member', 'auth', 'role:Admin,Super Admin']);

//Route All Galeri User
Route::resource('/dashboard/allgaleri', AllGaleriController::class)->middleware(['member', 'auth', 'role:Admin,Super Admin']);

// Route CashNote
Route::resource('/dashboard/cashnote', CashNoteController::class);

// Route OurProfil
Route::get('/ourprofil', function () {
    return view('ourprofil', [
        'title' => 'Profil Kami'
    ]);
});

// Route Refrence
Route::get('/refrence', function () {
    return view('refrence', [
        'title' => 'Refrence'
    ]);
});
