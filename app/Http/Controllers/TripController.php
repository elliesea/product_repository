<?php

//use宣言は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

/**
 * Post一覧を表示する
 * 
 * @param Post Postモデル
 * @return array Postモデルリスト
 */

class TripController extends Controller
{
    public function index(Trip $trip)//インポートしたTripをインスタンス化して$tripとして使用。
    {
        return $trip->get();//$tripの中身を戻り値にする。
    }
}

