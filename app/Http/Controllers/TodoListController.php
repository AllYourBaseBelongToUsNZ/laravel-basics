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
        // Perform CSRF check on all post/put/patch/delete requests
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
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
            'name' => 'required|unique:todo_lists|max:255',
        ]);

        if ($validator->fails()) {
            
            return redirect('todos/create')->withErrors($validator)->withInput();
        }

        //$rules = array('title'=>array('required','unique:todo_lists,name'));

        //$validator = validator::make(Input::all,$rules);

        

        $name = $request->input('name');

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

        $lists = TodoList::findOrFail($id);

        return View('todos.edit')->withLists($lists);


    }

    public function update(Request $request, $id){

      

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:todo_lists',
        ]);

    	 if ($validator->fails()) {

           
            return redirect()->route('todos.edit',[$id])->withErrors($validator)->withInput();
            
        }

            $name = $request->input('name');

            $list = TodoList::findOrFail($id);

            $list->name = $name;

            $list->update();

            return redirect()->route('todos.index')->withMessage('List was successfully updated');




    }

    public function destroy(Request $request, $id){

    	$todo_lists = TodoList::findOrFail($id)->delete();

        return redirect()->route('todos.index')->withMessage('List item has been deleted');
    }


}
