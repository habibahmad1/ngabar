<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Artikel;
use App\Models\Galeri;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(User $author)
    {
        $articles = Artikel::with(['category', 'user'])
            ->where('user_id', $author->id)
            ->paginate(7);

        return view('artikel', [
            'title' => "Artikel By: $author->name",
            'article' => $articles,
        ]);
    }


    public function index2(User $uploaded)
    {
        $galeri = Galeri::with(['kategoriGaleri', 'user'])
            ->where('user_id', $uploaded->id)
            ->get();

        return view('galeri', [
            'title' => "Galeri",
            'judulPage' => 'Uploaded By : ' . $uploaded->name,
            'galeri' => $galeri,
        ]);
    }

    public function makeAdmin(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user && !$this->isProtectedUser($user)) {
            $user->is_admin = true;
            $user->save();
            return redirect()->back()->with('success', 'User telah menjadi Admin.');
        }
        return redirect()->back()->with('error', 'User Di Lindungi.');
    }

    public function makeMember(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user && !$this->isProtectedUser($user)) {
            $user->is_admin = false;
            $user->save();
            return redirect()->back()->with('success', 'User kembali jadi Member.');
        }
        return redirect()->back()->with('error', 'User Di Lindungi.');
    }

    public function deleteUser(Request $request)
    {
        $user = User::find($request->user_id);
        if ($user && !$this->isProtectedUser($user)) {
            // Hapus artikel yang diposting oleh user
            $articles = $user->Artikel;
            foreach ($articles as $article) {
                // Hapus gambar terkait artikel, jika ada
                if ($article->image) {
                    Storage::delete($article->image);
                }
                $article->delete();
            }

            // Hapus galeri yang diunggah oleh user
            $galleries = $user->galeri;
            foreach ($galleries as $gallery) {
                // Hapus gambar terkait galeri, jika ada
                if ($gallery->image) {
                    Storage::delete($gallery->image);
                }
                $gallery->delete();
            }

            // Hapus user
            $user->delete();

            return redirect()->back()->with('success', 'User dan semua Artikel serta Galeri terkait telah dihapus.');
        }
        return redirect()->back()->with('error', 'User di Lindungi.');
    }

    protected function isProtectedUser($user)
    {
        // Tambahkan logika untuk memeriksa apakah user tersebut adalah superadmin atau memiliki status tertentu yang tidak boleh diubah
        return $user->is_admin || $user->status == 'protected';
    }
}
