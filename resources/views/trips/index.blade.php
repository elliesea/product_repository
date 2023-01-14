<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='trips'>
            @foreach ($trips as $trip)
                <div class='trip'>
                    <h2 class='title'>{{ $trip->title }}</h2>
                    <p class='body'>{{ $trip->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $trips->links() }}
        </div>
    </body>
</html>