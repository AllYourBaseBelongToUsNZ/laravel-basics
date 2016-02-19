@extends ('layouts.main')
@section('content')
  <h3>Show all list items</h3>


  @foreach ($todo_lists as $list)
 
  <h3>{{ Html::linkRoute('todos.show', $list->name, array($list->id)) }}</h3>

  <ul class="no-bullet button-groups">
 	<li>
	  {{Html::linkRoute('todos.edit','Edit',[$list->id],['class'=>'tiny warning button'])}} 

	  {{Form::model($list,['route'=>['todos.destroy',$list->id],'method'=>'delete'])}}
	  {{Form::button('destroy',['type'=>'submit','class'=>'tiny success button'])}}

	  {{Form::close()}}
 	</li>  
  </ul>


  @endforeach

  {{ Html::linkRoute('todos.create','Create New List',null,['class'=>'success button'])}}

@stop