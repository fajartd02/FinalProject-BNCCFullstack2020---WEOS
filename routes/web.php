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

Route::get('/', 'HomeController@index2');
Route::get('/home', 'HomeController@index');
Route::get('/home/create', 'HomeController@create');
Route::get('/home/{slug}', 'HomeController@show');
Route::get('/index', 'HomeController@index2');
Route::get('/cpp', 'HomeController@cpp');
Route::get('/course', 'HomeController@course');
Route::post('/home', 'HomeController@store');
Route::get('/home/{id}/edit', 'HomeController@edit');
Route::put('/home/{id}', 'HomeController@update');
Route::delete('/home/{id}', 'HomeController@destroy');