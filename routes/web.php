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

	$first_name = "Eliam";
	$last_name = "LOTONGA ";

	return view('pages.accueil', compact('first_name', 'last_name') );
});

Route::get('/about', function()
{
	return view('pages.about');
});
Route::get('/help', function()
{
	return View::make('pages.help');
});