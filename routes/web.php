<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/post', 'PostController@index');
Route::get('/', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::get('/post/{slug}', 'PostController@show');
Route::get('/index', 'PostController@index2');
Route::get('/cpp', 'PostController@cpp');
Route::get('/course', 'PostController@course');
Route::post('/post', 'PostController@store');
Route::get('/post/{id}/edit', 'PostController@edit');
Route::put('/post/{id}', 'PostController@update');
Route::delete('/post/{id}', 'PostController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
