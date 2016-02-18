<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function index(){

    	
    	//controller routes to the index.blade view in the todo's folder

    	return View('todos.index');

    }

    public function create(){

    	//create a new todo list.shows form

    }

    public function store(){

    	//stores new todo list


    }

     public function show($id){

    	//shows todo list item by id

    	return View('todos.show')->withId($id);


    }

    public function edit($id){

    	//edit todo list item by id. edit form


    }

    public function update($id){

    	//updates to do list by id using a form
    }

    public function destroy($id){

    	//delete list item by id
    }


}
