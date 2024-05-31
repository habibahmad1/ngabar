<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $prosesValidasi = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'noHp' => 'required|regex:/^[0-9]{10,}$/',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
        ]);

        User::create($prosesValidasi);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
