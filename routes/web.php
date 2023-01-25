<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;  //外部にあるTripControllerクラスをインポート。

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TripController::class, 'index']);
Route::get('/trips/create', [TripController::class, 'create']);
Route::get('/trips/{trip}', [TripController::class, 'show']);
Route::post('/trips', [TripController::class, 'store']);

Route::get('/trips/{trip}/edit', [TripController::class, 'edit']);
Route::put('/trips/{trip}', [TripController::class, 'update']);