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
        <div class="content">
            <div class="content__trip">
                <h3>Schedule</h3>
                <p class="schedule">{{ $trip->schedule }}</p>
                <h3>Subtitle</h3>
                <p class="subtitle">{{ $trip->subtitle}}</p> 
                <h3>body</h3>
                <p class="body">{{ $trip->body }}</p>    
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

