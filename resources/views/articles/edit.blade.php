<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trips</title>
    </head>
    <body>
        <h1>記事編集画面</h1>
        <form action="/articles/{{ $article->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="subtitle">
                <h2>SubTitle</h2>
                <input type="text" name="article[subtitle]" value="{{ $article->subtitle }}"/> 
            </div> 
            
            <div class="body">
                <h2>Body</h2>
                <textarea name="article[body]">{{ $article->body }}</textarea>
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class="back">[<a href="/trips/{{ $article->trip_id }}">back</a>]</div>
    </body>
</html>