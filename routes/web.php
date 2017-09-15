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

Route::get('/',['uses'=>'ActivitiesController@index']);

// Rotas para as chamadas de ajax
Route::post('/activities/add',['uses'=>'ActivitiesController@add']);
Route::post('/activities/edit',['uses'=>'ActivitiesController@edit']);
Route::post('/activities/delete',['uses'=>'ActivitiesController@delete']);
Route::post('/activities/done',['uses'=>'ActivitiesController@done']);
