<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuranController extends Controller
{
    public function index()
    {
        $url = 'https://equran.id/api/surat';

        $data = curl_init($url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($data);
        curl_close($data);

        $surah = json_decode($response, true);

        return view('quran',  [
            'title' => "Al-Qur'an",
            'surah' => $surah
        ]);
    }

    public function detailSurah($id)
    {
        $url = 'https://equran.id/api/surat/' . $id;

        $data = curl_init($url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($data);
        curl_close($data);

        $surah = json_decode($response, true);

        return view('detailquran', [
            'title' => "Al-Qur'an",
            'surah' => $surah
        ]);
    }
}
