<?php

namespace App\Models;

use App\Models\Article;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'user_id', 'article_id'];

    public function user()
    { // Un commentaire n'a qu'un auteur
        return $this->belongsTo(User::class);
    }

    public function article()
    { // Un commentaire n'a qu'un article
        return $this->belongsTo(User::class);
    }
}
