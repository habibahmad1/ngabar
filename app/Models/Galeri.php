<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ["user", "kategoriGaleri"];


    public function scopeFiltercoy($query)
    {
        if (request('search')) {
            return $query->where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('artikelPost', 'like', '%' . request('search') . '%');
        }
    }

    public function kategoriGaleri()
    {
        return $this->belongsTo(KategoriGaleri::class, 'kategoriGaleri_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
