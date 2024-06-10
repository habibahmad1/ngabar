<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AllGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allgaleri = Galeri::paginate(10);
        return view('dashboard.allgaleri.index', compact('allgaleri'));
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
    public function show(galeri $allgaleri)
    {
        return view('dashboard.allgaleri.detail', compact('allgaleri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(galeri $allgaleri)
    {

        if ($allgaleri->image) {
            Storage::delete($allgaleri->image);
        }

        $allgaleri->delete();

        return redirect('/dashboard/allgaleri')->with('success', 'Galeri Berhasil di Hapus');
    }
}
