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
	$isWeekend = date('N')>5;
	return view('pages.accueil', compact('first_name', 'last_name', 'isWeekend'));
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
		"Make PHP great again",
		"Laravel conference",
		"Meetup TDN",
		"JAVA conference"
	];
	return view('pages.events', compact('events') );

});