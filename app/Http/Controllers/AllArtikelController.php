<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allartikel = Artikel::paginate(10);
        return view('dashboard.allartikel.index', compact('allartikel'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $allartikel)
    {
        return view('dashboard.allartikel.detail', compact('allartikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $allartikel)
    {

        if ($allartikel->image) {
            Storage::delete($allartikel->image);
        }

        $allartikel->delete();

        return redirect('/dashboard/allartikel')->with('success', 'Artikel Berhasil di Hapus');
    }
}
