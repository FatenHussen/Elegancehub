<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Modles\Article;
use App\Modles\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'article_id'
    ];

    public function user(){
        return $this->belongsTo(User::Class);
    }

    public function article(){
        return $this->belongsTo(Article::Class);
    }
}
