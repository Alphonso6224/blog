<article>
    <h3>Article écrit par: <strong>{{ $article->user->name }}</strong></h3>
    <a href="/article/{{ $article->title }}">
        <p><mark>{{ $article->title }}</mark></p>
    </a>
</article>