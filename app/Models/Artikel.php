<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'judul','penulis','slug', 'excerpt', 'artikelPost'
    // ];

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
