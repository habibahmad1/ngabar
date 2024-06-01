<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Writer\ValidationException;


class ProfilController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('dashboard.user.profil', [
            'user' => $user
        ]);
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Mengambil data user berdasarkan ID
        $user = User::findOrFail($id);

        // Membuat aturan validasi
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'noHp' => 'required|regex:/^[0-9]{10,}$/',
        ];

        // Validasi khusus untuk username jika berubah
        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users,username,' . $user->id;
        }

        // Validasi khusus untuk email jika berubah
        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users,email,' . $user->id;
        }

        // Melakukan validasi input
        $validasiData = $request->validate($rules);

        // Menghandle upload gambar
        if ($request->file('image')) {
            // Hapus gambar lama jika ada
            if ($user->image) {
                Storage::delete($user->image);
            }
            // Simpan gambar baru dan tambahkan path ke array validasi
            $validasiData['image'] = $request->file('image')->store('user-image');
        }

        Log::info('Validated Data:', $validasiData); // Debugging line

        // Memperbarui data user termasuk path gambar jika ada gambar baru
        $user->update($validasiData);

        // Redirect ke halaman profil dengan pesan sukses
        return redirect('/dashboard/profil')->with('success', 'Edit successful!');
    }
}
