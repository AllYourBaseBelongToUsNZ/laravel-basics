@extends ('layouts.main')
@section('content')
  <h3>Show all list items</h3>


  @foreach ($todo_lists as $list)
  <ul>
 
  {{ Html::linkRoute('todos.show', $list->name, array($list->id)) }}


  </ul>


  @endforeach

  {{ Html::linkRoute('todos.create','Create New List',null,['class'=>'success button'])}}

@stop