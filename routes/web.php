<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('invoice', function(){
    return view('invoice');
});

Route::get('about', function(){
	return view('about');
});

Route::get('{path}',"HomeController@index")->where( 'path', '([A-z\d-\/_.]+)?' );
