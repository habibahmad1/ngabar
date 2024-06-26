<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGaleri extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }
}
