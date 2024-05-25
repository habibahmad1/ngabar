<?php

namespace App\Http\Controllers;

use App\Models\Reedem;
use App\Http\Requests\StoreReedemRequest;
use App\Http\Requests\UpdateReedemRequest;
use Illuminate\Http\Request;


class ReedemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.reedem');
    }

    public function reedem(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);

        $code = $request->input('code');

        $redeemCode = Reedem::where('code', $code)->first();

        if (!$redeemCode) {
            return redirect()->back()->with('error', 'Kode redeem tidak valid');
        }

        $user = auth()->user();

        if ($redeemCode->user_id === $user->id) {
            return redirect()->back()->with('error', 'Anda sudah melakukan redeem untuk kode ini');
        }

        if ($redeemCode->kuota <= 0) {
            return redirect()->back()->with('error', 'Kuota redeem untuk kode ini sudah habis');
        }

        // Mengurangi kuota sebelum menyimpan perubahan
        $redeemCode->kuota--;
        $redeemCode->user_id = $user->id;
        $redeemCode->save();

        return redirect()->back()->with('success', 'Kode redeem berhasil digunakan');
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
    public function store(StoreReedemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reedem $reedem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reedem $reedem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReedemRequest $request, Reedem $reedem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reedem $reedem)
    {
        //
    }
}
