<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel',  [
            'title' => 'Artikel',
            "article" => Artikel::latest()->filtercoy()->paginate(10)->withQueryString()
        ]);
    }
    public function show(Artikel $artikel)
    {
        return view('setiapArtikel', [
            "title" => "Artikel",
            "articlePost" => $artikel
        ]);
    }
}
