<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('login.index');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function showResetForm(Request $request, $token)
    {
        return view('login.changepw', [
            'token' => $token,
            'email' => $request->email,
            'title' => 'Login'
        ]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'token' => 'required'
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        switch ($status) {
            case Password::PASSWORD_RESET:
                return redirect()->route('login')->with('status', __('Berhasil direset. Silakan login dengan password baru Anda.'));
            case Password::INVALID_TOKEN:
                return back()->withErrors(['token' => __('Token reset password tidak valid.')]);
            case Password::INVALID_USER:
                return back()->withErrors(['email' => __('Email tidak ditemukan.')]);
            case Password::RESET_THROTTLED:
                return back()->withErrors(['email' => __('Silakan tunggu sebelum mencoba lagi.')]);
            default:
                return back()->withErrors(['email' => __('Gagal mereset password. Silakan coba lagi.')]);
        }
    }
}
