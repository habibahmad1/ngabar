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
            "article" => Artikel::all()
        ]);
    }
    public function show($slug)
    {
        return view('setiapArtikel', [
            "title" => "Artikel",
            "articlePost" => Artikel::find($slug)
        ]);
    }
}
