<?php

namespace App\Http\Controllers;

use App\Models\Hiburan;
use App\Http\Requests\StoreHiburanRequest;
use App\Http\Requests\UpdateHiburanRequest;
use Illuminate\Http\Request;

class HiburanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hiburan = Hiburan::all();
        return view('dashboard.hiburan.index', compact('hiburan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.hiburan.hiburan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'hiburan' => 'required|size:11',
            'judul' => 'required',
            'slug' => 'required'
        ]);

        $validasiData['user_id'] = auth()->id();

        $slug = $request->slug;

        while (Hiburan::where('slug', $slug)->exists()) {
            $slug = $request->slug . '-' . str_pad(mt_rand(1, 999), 3, '0', STR_PAD_LEFT);
        }

        $validasiData['slug'] = $slug;

        $pengetahuan = new Hiburan($validasiData);

        $pengetahuan->save();

        return redirect()->back()->with('success', 'Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hiburan $hiburan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hiburan $hiburan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHiburanRequest $request, Hiburan $hiburan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hiburan = Hiburan::findOrFail($id);
        $hiburan->delete();
        return redirect()->back()->with('success', 'hiburan berhasil dihapus');
    }
}
