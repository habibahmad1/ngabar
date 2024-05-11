<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            "title" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $validasiData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Cari pengguna dengan email yang diberikan
        $user = User::where('email', $validasiData['email'])->first();

        // Periksa apakah pengguna tidak memiliki kata sandi di database
        if ($user && empty($user->password)) {
            // Jika pengguna tidak memiliki kata sandi, tampilkan pesan untuk login menggunakan Google
            return back()->with('loginError', 'Please login using Google.');
        }

        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($validasiData, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
