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

Route::prefix('/Zero')->group(function () {
	Route::get('index', 'ZeroController@index');
	Route::get('index/home', 'ZeroController@hello');
	Route::get('index/content/{id?}', 'ZeroController@name');
});