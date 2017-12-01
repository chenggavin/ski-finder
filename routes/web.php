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
	$resorts = \App\Resort::orderBy('name', 'asc')->get();

    return view('welcome', compact('resorts'));
});

Auth::routes();

Route::resource('/home', 'ResortController');


Route::get('/resort/search', 'ResortController@search');
Route::post('/resort/{resort_id}', 'ResortController@store');
Route::delete('/resort/{resort_id}/delete', 'ResortController@destroy');

Route::get('/apiupdate', 'ResortController@update');
Route::post('/resort/{resort_id}/{resort_slug}/{post}', 'ResortController@postReview');


Route::resource('/resort', 'ResortController');

