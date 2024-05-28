<?php

namespace App\Http\Controllers;

use App\Models\KategoriGaleri;
use App\Models\Galeri;
use App\Http\Requests\StoreKategoriGaleriRequest;
use App\Http\Requests\UpdateKategoriGaleriRequest;

class KategoriGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('galeriKategori',  [
            'title' => 'Galeri',
            'galeri' => KategoriGaleri::paginate(10)
        ]);
    }

    public function allKategori()
    {
        return view('kategoriGaleri',  [
            'title' => 'Galeri',
            'judulPage' => 'Kategori Galeri',
            'kategoriGaleri' => KategoriGaleri::paginate(10)

        ]);
    }
    public function index2(KategoriGaleri $kategoriGaleri)
    {

        $kategori = Galeri::with(['kategoriGaleri', 'user'])
            ->where('kategoriGaleri_id', $kategoriGaleri->id)
            ->paginate(10);

        return view('Galeri', [
            'title' => 'Galeri',
            'judulPage' => 'Kategori Galeri',
            'galeri' => $kategori,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKategoriGaleriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKategoriGaleriRequest $request, KategoriGaleri $kategoriGaleri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriGaleri $kategoriGaleri)
    {
        //
    }
}
