<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create(Trip $trip)
    {
        return view('articles/create')->with(['trip'=>$trip]);
    }
    
    public function store(Trip $trip, Article $article, Request $request)
    {
        $input = $request['article'];
        $article->fill($input)->save();
        return redirect('/trips/' . $article->trip_id);
    }
}
