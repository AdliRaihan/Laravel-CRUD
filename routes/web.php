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

Route::get('/','mainController@index');

Route::get('/dashboard', 'mainController@store')->middleware('User');

Route::get('/Anggota', function(){
    $getDb = DB::table("anggotas")->get();
    return view('welcome',['getDb' => $getDb]);
})->middleware('Ages');


Route::resource('gView','GuestsDBController');
Route::get('/Expand','GuestsDBController@store')->middleware('User');
Route::get('/dash_guest','GuestsDBController@index');
Route::get('/update','GuestsDBController@update');
Route::get('/delete/{id}',['as' => 'delete','uses' => 'GuestsDBController@destroy']);

Route::get('/edit','mainController@editdata');