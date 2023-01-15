<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trips</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/trips" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="trip[title]" placeholder="タイトル" value="{{ old('trip.tilte') }}"/> 
                <p class="title_error" style="color:red">{{ $errors->first('trip.title') }}</p>
            </div>
            <div class="body">
                <h2>Body</h2>
                <textarea name="trip[body]" placeholder="今日も1日お疲れさまでした。">{{ old('trip.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('trip.body') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>