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
Route::post('/sound/deleteAction', 'SoundController@deleteAction');
Route::post('/sound/updateAction', 'SoundController@updateAction');
Route::post('/sound/updateOne', 'SoundController@updateOne');
Route::post('/sound/insertAction', 'SoundController@insertAction');

Route::get('/sound/insertOne', 'SoundController@insertOne');
Route::get('/sounds/showAll', 'SoundController@showAll');

Route::get('/', function () {
    return view('home');
});

