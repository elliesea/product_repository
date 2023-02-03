<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trips</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
        <form action="/trips/{{ $trip->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content_title">
                <h2>Title</h2>
                <input type="text" name="trip[title]" value="{{ $trip->title }}"/> 
            </div>
            <div class="content_schedule">
                <h2>Schedule</h2>
                <input type="schedule" name="trip[schedule]" value="{{ $trip->schedule }}"/> 
            </div>
            <div class="content_subtitle">
                <h2>SubTitle</h2>
                <input type="text" name="trip[subtitle]" value="{{ $trip->subtitle }}"/> 
            </div> 
            <div class="content_body">
                <h2>Body</h2>
                <input type="body" name='trip[body]' value="{{ $trip->body }}">
            </div>
            <input type="submit" value="update"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
        </div>
    </body>
</html>