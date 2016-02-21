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



Route::get('/db',function(){

	//return DB::select('select database();');

	$result =  DB::table('todo_lists')->where('name','Your List')->first();

	return $result->name;


});

// DB::listen(function($sql) {
//     var_dump($sql);
// });



//Route::get('/todos','TodoListController@index');

//new route for passing variables

//Route::get('/todos/{id}','TodoListController@show');

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
    Route::get('/', 'TodoListController@index');

Route::resource('todos','TodoListController');
});
