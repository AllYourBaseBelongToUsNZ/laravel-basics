<?php

namespace App\Http\Controllers;

use App\TodoList; 

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    public function index()
    {
  
        $todo_lists = TodoList::all();
        return View('todos.index')->with('todo_lists', $todo_lists);
    }

    public function create(){

    	//create a new todo list.shows form

        $list = new TodoList();

        $list->name = "Kylos Rens List";

        $list->save();

        return "Create a new list";

    }

    public function store(){

    	//stores new todo list


    }

     public function show($id){

    	//shows todo list item by id

        $list = TodoList::findOrFail($id);

    	return View('todos.show')->withList($list);


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
