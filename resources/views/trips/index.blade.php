<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trips</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <body>
        <h1>Blog Name</h1>
        <p>{{ Auth::user()->name }}</p>
        <a href='/trips/create'>create</a>
        <div class='trips'>
            @foreach ($trips as $trip)
                <div class='trip'>
                        <a href="/trips/{{ $trip->id }}"><h2 class='title'>{{ $trip->title }}</h2></a>
                    <form action="/trips/{{ $trip->id }}" id="form_{{ $trip->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deleteTrip({{ $trip->id }})">delete</button> 
                    </form>
                </div>
            @endforeach
        </div>
        <div class='paginate'>{{ $trips->links() }}</div>
        <script>
            function deleteTrip(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
        </script>
    </body>
    </x-app-layout>
</html>