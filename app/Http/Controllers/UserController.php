<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Artikel;

class UserController extends Controller
{
    public function index(User $author)
    {
        $articles = Artikel::with(['category', 'user'])
            ->where('user_id', $author->id)
            ->get();

        return view('artikel', [
            'title' => "Artikel By: $author->name",
            'article' => $articles,
        ]);
    }
}
