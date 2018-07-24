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

	$nom = "LOTONGA Eliam";

    return view('pages.accueil')->with('nom', $nom);
});

Route::get('/about', function()
{
	return view('pages.about');
});
Route::get('/help', function()
{
	return View::make('pages.help');
});