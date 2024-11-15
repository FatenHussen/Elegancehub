<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class Category extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name'];
    protected $fillable = [
        'name'
    ];

    public function articles(){
        return $this->hasMany(Article::class);
     }
}
