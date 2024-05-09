<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'noHp' => 'required|regex:/^[0-9]{10,}$/',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

        dd("Berhasil");
    }
}
