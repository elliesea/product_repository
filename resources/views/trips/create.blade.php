<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Trips</title>
    </head>
    <x-app-layout>
    <body>
    <section class="text-gray-400 bg-gray-900 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">Create new articles</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
          </div>
        
        
        <form action="/trips" method="POST">
            @csrf
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
            
            <div class="title">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="title" class="leading-7 text-sm text-gray-400">Title</label>
                  <input type="text" name="trip[title]" placeholder="タイトル" value="{{ old('trip.tilte') }}" class="w-full bg-gray-800 bg-opacity-40 rounded">
                  <p class="title_error" style="color:red">{{ $errors->first('trip.title') }}</p>
                </div>
              </div>
            </div>
            
            <div class="schedule">
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="schedule" class="leading-7 text-sm text-gray-400">Schedule</label>
                  <textarea name="trip[schedule]" placeholder="旅行日程を入れてください。"  value="{{ old('trip.schedule') }}" class="w-full bg-gray-800 bg-opacity-40 rounded"></textarea>
                  <p class="schedule_error" style="color:red">{{ $errors->first('trip.schedule') }}</p>
                </div>
              </div>
            </div>
            
            <div class="subtitle">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="subtitle" class="leading-7 text-sm text-gray-400">SubTitle</label>
                  <input type="text" name="trip[subtitle]" placeholder="サブタイトル" value="{{ old('trip.subtitle') }}" class="w-full bg-gray-800 bg-opacity-40 rounded">
                   <p class="subtitle_error" style="color:red">{{ $errors->first('trip.subtitle') }}</p>
                </div>
              </div>
            </div> 
            
            <div class="body">
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="body" class="leading-7 text-sm text-gray-400">Body</label>
                  <textarea name="trip[body]" placeholder="本文を入力してください。" value="{{ old('trip.body') }}" class="w-full bg-gray-800 bg-opacity-40 rounded"></textarea>
                  <p class="body_error" style="color:red">{{ $errors->first('trip.body') }}</p>  
                </div>
              </div>
            </div>
            
            
       
            <div class="p-2 w-full">
              <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                <input type="submit" value="store"/>
              </button>
            </div>
            <div class="p-2 w-full ">
              <button class="flex mx-auto text-white">
                <div class="back">[<a href="/">back</a>]</div>
              </button>
            </div>
        
          </div>
          </div>
        </form>
      </div>
    </section>
    </body>
    </x-app-layout>
</html>