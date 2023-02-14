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
        <p class="bg-slate-400">bg-slate-400</p>
        <a href='/articles/create/{{$trip->id}}'>記事の追加</a>
        
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        
        <div class="mb-10 md:mb-16">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mx-auto mb-4 md:mb-6">{{ $trip->title }}</h2>
            <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
        </div>
        
        <div class="content">
            <div class="content__trip">
                <div class='schedule_title' style="text-align: right">
                    <h3>Schedule</h3>
                </div>
                <div class='schedule' style="text-align: right">
                    <p class="schedule">{{ $trip->schedule }}</p>
                </div>
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
        
        </div>
         
            </div>
        </div>
    </body>
</html>

