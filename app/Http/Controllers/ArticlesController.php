<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Comment;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();
        
        return view('articles.articles', compact('articles'));
    }

    public function show(Article $article)
    {
        // $article = Article::with(['comments' => function ($query) {
        //     $query->with('user');
        // }])->findOrFail($id);
        // dd($article);
        // // ddd($article);
        return view('articles.show', compact('article'));
    }
}
