<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('galeri',  [
            'title' => 'Galeri',
            'galeri' => Galeri::latest()->get()
        ]);
    }

    public function detail(Galeri $galeri)
    {
        return view('detailGaleri', [
            'title' => 'Galeri',
            'galeriDetail' => $galeri
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
    public function store(StoreGaleriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriRequest $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $galeri)
    {
        //
    }
}
