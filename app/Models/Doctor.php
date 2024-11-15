<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'service_id'
    ];

    public function department(){

        return $this->belongsTo(Department::class);
    }

    public function rates(){
        
        return $this->belongsToMany(Rating::class);
    }
}
