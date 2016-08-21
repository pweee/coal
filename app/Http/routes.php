<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/info-bir', function() {
	return view('BIR-regis');
});

Route::get('/info-pag-ibig', function() {
	return view('pag-ibig-regis');
});

Route::get('/info-SSS', function() {
	return view('SSS-regis');
});

Route::get('/birregisdone', function() {
	return view('birregisdone');
	// It should be birrregisdonex, but FPDF is failing at an error that it cannot find the variable => fpdf
});

