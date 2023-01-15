<?php

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

namespace App\Http\Controllers;

use App\Http\Requests\TripRequest;
use App\Models\Trip;

/**
 * Trip一覧を表示する
 * 
 * @param Trip Tripモデル
 * @return array Tripモデルリスト
 */

class TripController extends Controller
{
    public function index(Trip $trip) 
    {
        return view('trips/index')->with(['trips' => $trip->getPaginateByLimit()]);
    }

    public function show(Trip $trip)
    {
        return view('trips/show')->with(['trip' => $trip]);
    }
    
    public function create()
    {
        return view('trips/create');
    }
    
    public function store(Trip $trip, TripRequest $request)
    {
        $input = $request['trip'];
        $trip->fill($input)->save();
        return redirect('/trips/' . $trip->id);
    }
}

