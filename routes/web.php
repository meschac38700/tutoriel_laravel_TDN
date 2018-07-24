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

	return view('pages.accueil')->withFirstName($first_name)->withLastName($last_name);
});

Route::get('/about', function()
{
	return view('pages.about');
});
Route::get('/help', function()
{
	return View::make('pages.help');
});

Route::get('/events', function()
{
	$events = [
		"PHP" => "Make PHP great again",
		"Laravel" => "Laravel conference"
	];
	return view('pages.events', compact('events') );

});