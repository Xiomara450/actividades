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
    return view('welcome');
});


Route::get('/fibo', function () {
    return view('fibonacci');
});
Route::post('/fibo','FibonacciController@fibo')->name ('fibo.fibonacci');



Route::get('/factor', function () {
    return view('factorizacion');
});
Route::post('/factor','FactorizacionController@factor')->name ('factor.factorizacion');
