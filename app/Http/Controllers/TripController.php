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
        return view('trips/index')->with(['trips' => $trip->getPaginateByLimit(5)]);
    }

    public function show(Trip $trip)
    {
        return view('trips/show')->with(['trip' => $trip]);
    }
    
    public function create()
    {
        return view('trips/create');
    }
    
    public function store(TripRequest $request, Trip $trip)
    {
        $input = $request['trip'];
        $trip->fill($input)->save();
        return redirect('/trips/' . $trip->id);
    }
    
    public function edit(Trip $trip)
    {
        return view('trips/edit')->with(['trip' => $trip]);
    }
    
    public function update(TripRequest $request, Trip $trip)
    {
        $input_trip = $request['trip'];
        $trip->fill($input_trip)->save();

        return redirect('/trips/' . $trip->id);
    }
}

