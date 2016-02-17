<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    
    //return view('welcome');

    //return View::make('welcome',array('name' =>'laurie','age'=>'27'));

    //return View::make('welcome')->with('name','laurie');

    //return View::make('welcome')->withName('laurie');

    //return "hello World";

	$data = 
	['name'=>'laurie',
	'email'=>'lauriewilliamz@gmail.com',
	'location' =>'New Zealand',
	'last_name'=>'Williams'];
	return View::make('hello')->withData($data);

});

//new route for passing variables

Route::get('/hello/{name?}', function ($name = "not laurie") {

	return View::make('hello')->with('name',$name);

});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
