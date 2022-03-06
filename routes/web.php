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


Route::get('/','App\Http\Controllers\TaskController@getTasksAdmin')->name('index');
Route::get('/card/{id}','App\Http\Controllers\TaskController@getCard')->name('card');
Route::post('/store','App\Http\Controllers\TaskController@store')->name('store');
Route::get('/update/{id}','App\Http\Controllers\TaskController@update')->name('update');
Route::put('/storeUpdate/{id}','App\Http\Controllers\TaskController@storeUpdate')->name('storeUpdate');
Route::delete('/task/{task}','App\Http\Controllers\TaskController@delete')->name('tasks.delete');