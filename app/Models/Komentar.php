<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['user', 'artikel'];

    public function artikel()
    {
        return $this->belongsTo(Artikel::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function galeri()
    {
        return $this->belongsTo(Galeri::class);
    }
}
