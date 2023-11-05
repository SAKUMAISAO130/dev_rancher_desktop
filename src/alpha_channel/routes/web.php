<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/new', 'App\Http\Controllers\PostController@new');
Route::post('post/create', 'App\Http\Controllers\PostController@create');
Route::get('post/save', 'App\Http\Controllers\PostController@save');
