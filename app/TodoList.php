<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    public function listitems(){

    	return $this->hasMany('TodoItem');
    }
}
