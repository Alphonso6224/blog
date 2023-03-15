<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    // Ajout
    protected $fillable = ['title', 'body', 'user_id', 'image'];
    protected $appends = [
        'author'
    ];

    public function getAuthorAttribute()
    {
        return $this->user->name;
    }

    public function user()
    { // bUn article n'a qu'un auteur
        return $this->belongsTo(User::class);
    }

    public function comments()
    { // Un article peut avoir plusieurs commentaires
        return $this->hasMany(User::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
}


