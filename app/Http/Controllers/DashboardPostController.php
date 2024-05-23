<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.artikel.index', [
            'dataArtikel' => Artikel::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.artikel.create', [
            'data' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'judul' => 'required | max:255',
            'slug' => 'required|unique:artikels',
            'image' => 'image|file|max:2048',
            'category_id' => 'required',
            'artikelPost' => 'required'
        ]);

        if ($request->file('image')) {
            $validasiData['image'] = $request->file('image')->store('artikel-image');
        }

        $validasiData['user_id'] = auth()->user()->id;
        $validasiData['excerpt'] = Str::limit(strip_tags($request->artikelPost), 120);

        Artikel::create($validasiData);

        return redirect('/dashboard/artikel')->with('success', 'Berhasil Menambahkan Artikel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        return view('dashboard.artikel.detail', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('dashboard.artikel.edit', [
            'artikel' => $artikel,
            'data' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $rules = [
            'judul' => 'required | max:255',
            'category_id' => 'required',
            'artikelPost' => 'required'
        ];

        if ($request->slug != $artikel->slug) {
            $rules['slug'] = 'required|unique:artikels';
        }

        $validasiData = $request->validate($rules);

        $validasiData['user_id'] = auth()->user()->id;
        $validasiData['excerpt'] = Str::limit(strip_tags($request->artikelPost), 120);

        Artikel::where('id', $artikel->id)
            ->update($validasiData);

        return redirect('/dashboard/artikel')->with('success', 'Berhasil Edit Artikel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Artikel::destroy($artikel->id);

        return redirect('/dashboard/artikel')->with('success', 'Artikel Berhasil di Hapus');
    }

    public function cekSlug(Request $request)
    {
        $slug = SlugService::createSlug(Artikel::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
