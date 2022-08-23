<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/posts', function(){

    return response()-> json ([
        'posts'=>[
            [
                'title' => 'Post One'
            ]
        ]
        ]);
});
Route::get('/ser', function(){
    return view('/Currencyapi');
});
Route::get('/hos', function(){
    return view('/Hostor');
});
Route::get('/ava', function(){
    return view('/available');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("add",[DeviceController::class,'add']);