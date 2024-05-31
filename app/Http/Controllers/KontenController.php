<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use App\Http\Requests\StoreKontenRequest;
use App\Http\Requests\UpdateKontenRequest;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konten = Konten::all();
        return view('dashboard.konten.index', compact('konten'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.konten.pengetahuan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'pengetahuan' => 'required|size:11',
            'judul' => 'required',
            'slug' => 'required'
        ]);

        $validasiData['user_id'] = auth()->id();

        $slug = $request->slug;

        while (Konten::where('slug', $slug)->exists()) {
            $slug = $request->slug . '-' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
        }

        $validasiData['slug'] = $slug;

        $pengetahuan = new Konten($validasiData);

        $pengetahuan->save();

        return redirect()->back()->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konten $konten)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konten $konten)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKontenRequest $request, Konten $konten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $konten = Konten::findOrFail($id);
        $konten->delete();
        return redirect()->back()->with('success', 'Konten berhasil dihapus');
    }
}
