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


Route::get('users', 'UserController@index');
//Route::post('{user}/togglecategory', 'Site\ProfileController@toggleCategory')->name('toggleCategory');

Route::get('/XMLHttpRequest_GET', 'UserController@answertoget')->name('answertoget');

Route::post('/post', 'UserController@post');

Route::post('/postit', 'UserController@postit');
