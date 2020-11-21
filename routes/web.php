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

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/create', 'ArticlesController@create');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/{id}', 'ArticlesController@show');
Route::get('/articles/{id}/edit', 'ArticlesController@edit');
Route::post('/articles/{id}', 'ArticlesController@update');
Route::post('/articles/{id}', 'ArticlesController@delete');
