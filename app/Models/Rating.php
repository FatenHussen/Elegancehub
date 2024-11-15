<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillale = [
        'rating',
        'feedback',
        'user_id',
        'doctor_id'
    ];
}
