<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

use App\TodoList;

use \App\TodoItem;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Input;

class TodoItemController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $list_id)
    {
        $todo_list = TodoList::findOrFail($list_id);
        return View('items.create')->withTodoList($todo_list);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($list_id)
    {
        $todo_list = TodoList::findOrFail($list_id);

        $rules = array(
             'content' => 'required|max:255',
        );


        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return redirect()->route('todos.items.create',$list_id)->withErrors($validator)->withInput();
        }

        $item = new TodoItem();

        $item->content = Input::get('content');

        $item->save();

        $todo_list->listItems()->save($item);

                
                return redirect()->route('todos.show',$todo_list->id)->withMessage('Item was successfully added');

    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
