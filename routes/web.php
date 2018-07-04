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
#------------------------Sounds-Routes------------------------------
Route::post('/sound/deleteAction', 'SoundController@deleteAction');
Route::post('/sound/updateAction', 'SoundController@updateAction');
Route::post('/sound/updateOne', 'SoundController@updateOne');
Route::post('/sound/insertAction', 'SoundController@insertAction');

Route::get('/sound/insertOne', 'SoundController@insertOne');
Route::get('/sounds/showAll', 'SoundController@showAll');
#-------------------------------------------------------------------
#-----------------------Composers-Routes---------------------------
Route::post('/composer/updateOne', 'ComposerController@updateOne');
Route::post('/composer/updateAction', 'ComposerController@updateAction');
Route::post('/composer/insertAction', 'ComposerController@insertAction');
Route::get('/composer/insertOne', 'ComposerController@insertOne');
Route::get('/composers/showAll', 'ComposerController@showAll');
#--------------------------------------------------------------------
Route::get('/', function () {
    return view('home');
});

