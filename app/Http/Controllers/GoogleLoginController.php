<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Oauth2;
use App\Models\User;

class GoogleLoginController extends Controller
{
    public function index()
    {
        return view('login.index',  [
            'title' => 'Login',
        ]);
    }

    public function handleGoogleCallback(Request $request)
    {
        $client = new Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));

        $code = $request->get('code');
        $token = $client->fetchAccessTokenWithAuthCode($code);

        if (!isset($token['error'])) {
            $client->setAccessToken($token['access_token']);
            $oauth = new Oauth2($client); // Perubahan pada inisialisasi objek Oauth2
            $user_info = $oauth->userinfo->get();

            // Dapatkan informasi pengguna dari Google
            $google_id = $user_info->id;
            $email = $user_info->email;
            $name = $user_info->name;
            $username = $user_info->name . '_' . uniqid();

            // Periksa apakah pengguna sudah ada di database berdasarkan email
            $existingUser = User::where('email', $email)->first();

            // Jika pengguna tidak ditemukan, tambahkan pengguna baru ke dalam database
            if (!$existingUser) {
                $newUser = new User();
                $newUser->name = $name;
                $newUser->username = $username;
                $newUser->email = $email;
                $newUser->google_id = $google_id;
                $newUser->save();
            }

            return redirect('/');

            // Sekarang Anda dapat melanjutkan dengan logika autentikasi atau tindakan lainnya
        } else {
            // Jika ada kesalahan, tangani di sini
        }
    }
}
