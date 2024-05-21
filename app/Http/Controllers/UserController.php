<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Galeri;

class UserController extends Controller
{
    public function index(User $author)
    {
        $articles = Artikel::with(['category', 'user'])
            ->where('user_id', $author->id)
            ->paginate(7);

        return view('artikel', [
            'title' => "Artikel By: $author->name",
            'article' => $articles,
        ]);
    }


    public function index2(User $uploaded)
    {
        $galeri = Galeri::with(['kategoriGaleri', 'user'])
            ->where('user_id', $uploaded->id)
            ->get();

        return view('galeri', [
            'title' => "Galeri",
            'judulPage' => 'Uploaded By : ' . $uploaded->name,
            'galeri' => $galeri,
        ]);
    }
}
