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

Auth::routes();

Route::get('/home', 'ArticleController@index');
Route::get('/showAll', 'ArticleController@showAll');
Route::get('/create', 'ArticleController@create');
Route::post('/create', 'ArticleController@store');
Route::get('/showCategory/{category}', 'ArticleController@showCategory');
Route::get('/showContent/{id}', 'ArticleController@showContent');
Route::get('/edit/{id}', 'ArticleController@edit');
Route::put('/edit/{id}', 'ArticleController@update');
Route::delete('/hapus/{id}', 'ArticleController@destroy');