<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index.index');
});

Route::prefix('html')->group(function (){
    Route::get('/',[\App\Http\Controllers\Html::class,'index']);
});

Route::prefix('iframe')->group(function (){
    Route::get('/',[\App\Http\Controllers\Iframe::class,'index']);
    Route::get('/index.html',[\App\Http\Controllers\Iframe::class,'index']);
    Route::get('/main.html',[\App\Http\Controllers\Iframe::class,'main']);
    Route::get('/{name}',[\App\Http\Controllers\Iframe::class,'empty']);
});


Route::get('{name}',[\App\Http\Controllers\Html::class,'empty']);


