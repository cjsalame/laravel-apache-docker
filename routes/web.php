<?php

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

Route::get('todos', 'TodosController@index');
Route::get('todos/{id}', 'TodosController@show');
Route::get('todos/new', 'TodosController@create');
Route::post('todos/save', 'TodosController@save');
Route::get('todos/{id}/edit', 'TodosController@edit');
Route::post('todos/{id}/update', 'TodosController@update');
