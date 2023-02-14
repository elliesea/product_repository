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
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        
        <div class="mb-10 md:mb-16">
            <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">旅行記</h2>
            <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text but is random or otherwise generated.</p>
            <div class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto">{{ Auth::user()->name }}</div>
        </div>
        
    <div class='trips'>
        @foreach ($trips as $trip)
            <div class='trip'>
                    
                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/3 md:w-1/2 p-4">
                        <div class="border border-gray-200 p-6 rounded-lg">
                            <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                                </svg>
                            </div>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                                <a href="/trips/{{ $trip->id }}"><h2 class='title'>{{ $trip->title }}</h2></a>
                            </h2>
                            <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waist co, subway tile poke farm.</p>
                            <form action="/trips/{{ $trip->id }}" id="form_{{ $trip->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="deleteTrip({{ $trip->id }})">delete</button> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>    
        @endforeach
        <div class='paginate'>{{ $trips->links() }}</div>
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
    </x-app-layout>
</html>