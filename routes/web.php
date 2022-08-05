<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/', function(){
    return view ('Welcome');
});
Route::get('/Home', function(){
return view ('index');
});
Route::get('/Crypto', function(){
    return view ('Crypto');
});
Route::get('/ConverterAPP', function(){
    return view ('converterapp');
});
Route::get('/LineChart', function(){
    return view ('LineChart');
});
Route::get('/Goldview', function(){
    return view ('Goldview');
});
Route::get('/contact', function(){
    return view ('contact');
});