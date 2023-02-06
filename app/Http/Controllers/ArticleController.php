<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
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
    
    public function edit(Article $article)
    {
        return view('articles/edit')->with(['article' => $article]);
    }
    
    public function update(ArticleRequest $request, Article $article)
    {
        $input_article = $request['article'];
        $article->fill($input_article)->save();
        
        return redirect('/trips/' . $article->trip_id);
    }
    
    public function delete(Article $article)
    {
        $article->delete();
        return redirect('/trips/' . $article->trip_id);
    }
    
    
}
