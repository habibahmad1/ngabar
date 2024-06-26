<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'noHp',
    //     'password',

    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_active' => 'datetime',
        'password' => 'hashed',
    ];

    public function Artikel()
    {
        return $this->hasMany(Artikel::class);
    }

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }

    public function reedem()
    {
        return $this->hasMany(Reedem::class);
    }

    public function konten()
    {
        return $this->hasMany(Konten::class);
    }

    public function hiburan()
    {
        return $this->hasMany(Hiburan::class);
    }

    public function cashnote()
    {
        return $this->hasMany(Hiburan::class);
    }
}
