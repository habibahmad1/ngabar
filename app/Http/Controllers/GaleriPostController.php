<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\KategoriGaleri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GaleriPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.galeri.index', [
            'dataGaleri' => Galeri::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.create', [
            'data' => KategoriGaleri::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'judul' => 'required|max:255',
            'img' => 'image|file|max:2048',
            'kategoriGaleri_id' => 'required',

        ]);

        if ($request->file('img')) {
            $validasiData['img'] = $request->file('img')->store('galeri-img');
        }
        $validasiData['user_id'] = auth()->user()->id;

        Galeri::create($validasiData);

        return redirect('/dashboard/galeri')->with('success', 'Berhasil Menambahkan Galeri');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        return view('dashboard.galeri.detail', [
            'galeri' => $galeri
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        return view('dashboard.galeri.edit', [
            'galeri' => $galeri,
            'data' => KategoriGaleri::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Galeri $galeri)
    {
        $rules = [
            'judul' => 'required|max:255',
            'kategoriGaleri_id' => 'required',
            'img' => 'image|file|max:2048',
        ];

        $validasiData = $request->validate($rules);

        // Cek jika ada file gambar baru
        if ($request->file('img')) {
            // Hapus gambar lama jika ada
            if ($galeri->img) {
                Storage::delete($galeri->img);
            }
            // Simpan gambar baru dan masukkan ke validasi data
            $validasiData['img'] = $request->file('img')->store('galeri-img');
        }

        // Tambahkan user_id dan excerpt ke validasi data
        $validasiData['user_id'] = auth()->user()->id;

        // Update artikel dengan data yang telah divalidasi
        $galeri->update($validasiData);

        return redirect('/dashboard/galeri')->with('success', 'Berhasil Edit Galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        Galeri::destroy($galeri->id);

        if ($galeri->img) {
            Storage::delete($galeri->img);
        }

        return redirect('/dashboard/galeri')->with('success', 'Galeri Berhasil di Hapus');
    }
}
