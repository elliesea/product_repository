<?php

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

/**
 * Trip一覧を表示する
 * 
 * @param Trip Tripモデル
 * @return array Tripモデルリスト
 */

class TripController extends Controller
{
    public function index(Trip $trip) //インポートしたTripをインスタンス化して$tripとして使用。
    {
        //return $trip->get();   //$tripの中身を戻り値にする。
        
        //return view('trips/index')->with(['trips' => $trip->get()]);  
        //blade内で使う変数'trips'と設定。'trips'の中身にgetを使い、インスタンス化した$tripを代入。
       
        //return view('trips/index')->with(['trips' => $trip->getByLimit()]);
        
        return view('trips/index')->with(['trips' => $trip->getPaginateByLimit()]);
        //getPaginateByLimit()はTrip.phpで定義したメソッドです。
    }
}

