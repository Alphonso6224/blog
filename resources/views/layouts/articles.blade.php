@extends('layouts.master')

@section('title')   
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
    <!-- @each('articles.index', $articles, 'article', 'articles.no-articles') -->
    @if($articles)
        @foreach($articles as $article)
            @include('articles.index')
        @endforeach
    @else
        @include('articles.no-articles')
    @endif
@endsection
