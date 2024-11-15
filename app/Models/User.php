<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\FileTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, FileTrait;
    protected $tabel = 'users';
    protected $fillable = [
        'name',
        'email',
        'city_id',
        'password',
        'image',
        'email_verified_at',
        'is_blocked',

    ];

    protected $hidden = [
        'remember_token',
        'password',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_premium' => 'boolean',
        'is_blocked' => 'boolean',
    ];

    public function verifications(): HasMany
    {
        return $this->hasMany(Verification::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function rates(){
        
        return $this->hasMany(Rating::class);
    }
}