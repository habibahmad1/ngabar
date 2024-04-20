<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(User $author)
    {
        return view('artikel',  [
            'title' => 'Author',
            "article" => $author->artikel,
        ]);
    }
}