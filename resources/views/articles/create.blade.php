<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trips</title>
    </head>
    <x-app-layout>
    <body>
        <h1>記事作成画面</h1>
        <form action="/articles" method="POST">
            @csrf
            <div class="subtitle">
                <h2>SubTitle</h2>
                <input type="text" name="article[subtitle]" placeholder="サブタイトル" value="{{ old('trip.subtitle') }}"/> 
                <p class="subtitle_error" style="color:red">{{ $errors->first('trip.subtitle') }}</p>
            </div> 
            
            <div class="body">
                <h2>Body</h2>
                <textarea name="article[body]" placeholder="今日も1日お疲れさまでした。">{{ old('trip.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('trip.body') }}</p>
            </div>
            <input type='hidden' name="article[trip_id]" value={{ $trip->id }} />
            
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
    </x-app-layout>
</html>