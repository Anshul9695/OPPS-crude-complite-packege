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

//createing route for todu_show
Route::get('todo_show','TodoController@show');
Route::get('todo_delete/{id}','TodoController@destroy');
Route::get('todo_create/','TodoController@create');
Route::post('todo_submit','TodoController@store');
Route::get('todo_edit/{id}','TodoController@edit');
Route::post('todo_update/{id}','TodoController@update')->name('todo.update');