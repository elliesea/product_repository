<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trips</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $trip->title }}
        </h1>
        <a href='/articles/create/{{$trip->id}}'>記事を作成</a>
        <div class="content">
            <div class="content__trip">
                <h3>Schedule</h3>
                <p class="schedule">{{ $trip->schedule }}</p>
                @foreach ($trip->articles as $article)
                    <div class='trip'>
                            <h2 class='title'>サブタイトル名:{{ $article->subtitle }}</h2>
                            <p class ="body">本文:{{ $article->body }}</p>
                        <form action="/trips/{{ $article->id }}" id="form_{{ $article->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteTrip({{ $article->id }})">delete</button> 
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="edit">
            <a href="/trips/{{ $trip->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>

