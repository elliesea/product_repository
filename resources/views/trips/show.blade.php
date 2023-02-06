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
        <a href='/articles/create/{{$trip->id}}'>記事の追加</a>
        <div class="content">
            <div class="content__trip">
                <h3>Schedule</h3>
                <p class="schedule">{{ $trip->schedule }}</p>
                @foreach ($trip->articles as $article)
                    <div class='trip'>
                            <h2 class='title'>サブタイトル名:{{ $article->subtitle }}</h2>
                            <p class ="body">本文:{{ $article->body }}</p>
                        <form action="/articles/{{ $article->id }}" id="form_{{ $article->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteTrip({{ $article->id }})">delete</button> 
                            <div class="edit">
                                <a href="/articles/{{ $article->id }}/edit">記事編集</a>
                            </div>
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
        <script>
            function deleteTrip(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
    </body>
</html>

