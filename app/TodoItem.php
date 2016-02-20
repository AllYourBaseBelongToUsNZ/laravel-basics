<?php 

class TodoList extends Model
{
    public function todoList(){

    	return $this->belongsTo('TodoList');
    }
}

?>