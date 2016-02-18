<?php

namespace App\Http\Controllers;

use Validator;


use App\TodoList; 

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TodoListController extends Controller
{
    
   public function _construct()
    {
        

        $this->beforeFilter('csrf', array('on' => 'post'));

    }

    public function index()
    {
  
        $todo_lists = TodoList::all();
        return View('todos.index')->with('todo_lists', $todo_lists);
    }

    public function create(){

    	//create a new todo list.shows form

        return View('todos.create');

    }

    public function store(Request $request){

    	//stores new todo list

        //rules 

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:todo_lists,name|max:255',
        ]);

        if ($validator->fails()) {
            
            return redirect('todos/create')->withErrors($validator)->withInput();
        }

        //$rules = array('title'=>array('required','unique:todo_lists,name'));

        //$validator = validator::make(Input::all,$rules);

        

        $name = $request->input('title');

        $list = new TodoList();

        $list->name = $name;

        $list->save();

        return redirect()->route('todos.index')->withMessage('List was successfully created');




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
