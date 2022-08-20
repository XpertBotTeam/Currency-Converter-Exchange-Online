<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
//use Illuminate\Support\Str;

use App\Http\Controllers\ChartController;
use App\Http\Controllers\CurrencyExchangeController;
use App\Http\Controllers\FieldsController;
use App\Http\Controllers\GoldviewController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ValuesController;

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
// here we go
Route::get('/hello', function(){
    return view ('hello');
});
Route::get('/ch', function(){
    return view ('checking');
});
Route::get('/', function(){
    return view ('index11');
});
Route::get('/changepassword', function(){
    return view ('changepassword');
});
Route::get('/forgetpassword', function(){
    return view ('forgetpassword');
});
Route::get('/logout', function(){
    return view ('logout');
});
Route::get('/r', function(){
    return view ('registerfor');
});
Route::get('/welcome', function(){
    return view ('Welcome');
});
Route::get('/home', function(){
return view ('index');
});
Route::get('/checkform', function(){
    return view ('checkform');
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
Route::get('/GetInTouch', function(){
    return view ('GetInTouch');
});

// Database migration
/*
Route::get('/Crypto',[CryptoCurrencyController::class,'CryptoCurrency']);
Route::get('/ConverterApp',[ConverterAppController::class,'ConverterApp']);
Route::get('/LineChart',[CryptoLineChartController::class,'LineChart']);
Route::get('/GoldPrice',[GoldPriceController::class,'GoldPrice']);
Route::get('/contact',[ContactsController::class,'ContactUs']);
*/

// Database migration

Route::resource('goldview', 'GoldviewController');
Route::resource('values', 'ValuesController');
Route::resource('chart', 'ChartController');
Route::resource('currency-exchange', 'CurrencyExchangeController');
Route::resource('fields', 'FieldsController');
Route::resource('owner', 'OwnerController');
Route::resource('main', 'MainController');





