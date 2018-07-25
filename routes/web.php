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
			'name'=> "toto !",
			'description'=> "Super sketech de Toto à ne pas rater !",
			'location'=> "Bron, FR",
			'price'=> 0,
			'starts_at'=>new DateTime('+5 days')
		]);
Event::create([
			'name'=> "Titi !",
			'description'=> "Super sketech de Titi à ne pas rater !",
			'location'=> "Lyon, FR",
			'price'=> 0,
			'starts_at'=>new DateTime('+5 hours')
		]);*/
	$events = Event::all();
    return view('events.index', compact('events') );
});
