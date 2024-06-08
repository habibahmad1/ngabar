<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuranController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $url = 'https://equran.id/api/surat';

        $data = curl_init($url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($data);
        curl_close($data);

        $surah = json_decode($response, true);

        // Filter results based on search query
        if ($search) {
            $surah = array_filter($surah, function ($surah) use ($search) {
                return stripos($surah['nama_latin'], $search) !== false ||
                    stripos($surah['arti'], $search) !== false ||
                    stripos($surah['deskripsi'], $search) !== false;
            });
        }

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
