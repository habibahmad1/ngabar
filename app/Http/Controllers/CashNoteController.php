<?php

namespace App\Http\Controllers;

use App\Models\CashNote;
use App\Models\User;
use App\Http\Requests\StoreCashNoteRequest;
use App\Http\Requests\UpdateCashNoteRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CashNoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        // Middleware untuk semua metode kecuali 'index'
        $this->middleware(['auth', 'role:Admin,Super Admin'])->except('index');
    }

    public function index()
    {

        return view(
            'dashboard.cashnote.index',
            [
                'cashnotes' => CashNote::paginate(10)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.cashnote.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $namaBarangs = $request->input('nama_barang');
        $jumlahBarangs = $request->input('jumlah_barang');
        $hargaSatuans = $request->input('harga_satuan');

        // Lakukan penyimpanan data ke database
        foreach ($namaBarangs as $index => $namaBarang) {
            $jumlahBarang = $jumlahBarangs[$index];
            $hargaSatuan = $hargaSatuans[$index];

            // Buat entri baru di database
            Cashnote::create([
                'user_id' => auth()->user()->id, // Sesuaikan dengan kolom yang ada di tabel Anda
                'nama_barang' => $namaBarang,
                'jumlah_barang' => $jumlahBarang,
                'harga_satuan' => $hargaSatuan,
            ]);
        }

        return redirect('/dashboard/cashnote')->with('success', 'Catatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(CashNote $cashNote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CashNote $cashNote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCashNoteRequest $request, CashNote $cashNote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        CashNote::destroy($id);
        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Catatan telah dihapus.');
    }
}
