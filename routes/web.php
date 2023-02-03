<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(TripController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'index')->name('index');
    Route::post('/trips', 'store')->name('store');
    Route::get('/trips/create', 'create')->name('create');
    Route::get('/trips/{trip}', 'show')->name('show');
    Route::put('/trips/{trip}', 'update')->name('update');
    Route::delete('/trips/{trip}', 'delete')->name('delete');
    Route::get('/trips/{trip}/edit', 'edit')->name('edit');
});

Route::controller(ArticleController::class)->middleware(['auth'])->group(function(){
    Route::post('/articles', 'store')->name('store');
    Route::get('/articles/create/{trip}', 'create');
    Route::put('/articles/{article}', 'update')->name('update');
    Route::delete('/articles/{article}', 'delete')->name('delete');
    Route::get('/articles/{article}/edit', 'edit')->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
