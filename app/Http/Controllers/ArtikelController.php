<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\User;
use App\Models\Komentar;
use App\Models\Konten;
use App\Models\Hiburan;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel',  [
            'title' => 'Artikel',
            "article" => Artikel::latest()->filtercoy()->paginate(10)->withQueryString(),
            'pengetahuan' => Konten::latest()->get(),
            'hiburan' => Hiburan::latest()->get(),
        ]);
    }
    public function show(Artikel $artikel)
    {
        return view('setiapArtikel', [
            "title" => "Artikel",
            "articlePost" => $artikel,
            'komentar' => Komentar::where('artikel_id', $artikel->id)->get(),
            'user' => User::all()
        ]);
    }

    public function store(Request $request, Artikel $artikel)
    {
        $validasiData = $request->validate([
            'content' => 'required|max:300',
        ]);

        $validasiData['user_id'] = auth()->id();
        $validasiData['artikel_id'] = $artikel->id;

        // Buat komentar baru
        $comment = new Komentar($validasiData);

        // Simpan komentar
        $comment->save();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Komentar berhasil ditambahkan.');
    }

    public function destroy(Komentar $komentar)
    {
        Komentar::destroy($komentar->id);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Komentar telah dihapus.');
    }

    public function formPengetahuan()
    {
        return view('dashboard.pengetahuan');
    }

    public function addPengetahuan(Request $request, Konten $konten)
    {
        $validasiData = $request->validate([
            'pengetahuan' => 'required|size:11',
        ]);

        $validasiData['user_id'] = auth()->id();

        $pengetahuan = new Konten($validasiData);

        $pengetahuan->save();

        return redirect()->back()->with('success', 'Berhasil Ditambahkan');
    }

    public function formHiburan()
    {
        return view('dashboard.hiburan');
    }

    public function addHiburan(Request $request, Hiburan $hiburan)
    {
        $validasiData = $request->validate([
            'hiburan' => 'required|size:11',
        ]);

        $validasiData['user_id'] = auth()->id();

        $hiburan = new Hiburan($validasiData);

        $hiburan->save();

        return redirect()->back()->with('success', 'Berhasil Ditambahkan');
    }
}
