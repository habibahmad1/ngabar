<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashNote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_barang',
        'jumlah_barang',
        'harga_satuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
