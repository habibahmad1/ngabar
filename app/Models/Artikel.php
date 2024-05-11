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

    protected $with = ["user", "category"];

    public function scopeFiltercoy($query)
    {
        if (request('search')) {
            return $query->where('judul', 'like', '%' . request('search') . '%')
                ->orWhere('artikelPost', 'like', '%' . request('search') . '%');
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
