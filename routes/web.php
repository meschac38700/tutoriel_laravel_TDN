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
use App\Event;
Route::get('/', function () {
	//DB::statement('TRUNCATE TABLE events');
	/*Event::create([
			'name'=> "Super sketch de Wil Aime !",
			'description'=> "Super sketech de Mister Wil Aime à ne pas rater !",
			'location'=> "Marseille, FR",
			'price'=> 40
		]);
*/
	$events = Event::all();
    return view('events.index', compact('events') );
});
