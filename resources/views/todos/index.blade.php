@extends ('layouts.main')
@section('content')
  <h3>Show all list items</h3>


  @foreach ($todo_lists as $list)
 
  <h3>{{ Html::linkRoute('todos.show', $list->name, array($list->id)) }}</h3>

  <ul class="no-bullet button-groups">
  {{Html::linkRoute('todos.edit','Edit',[$list->id],['class'=>'small warning button'])}}
  </ul>


  @endforeach

  {{ Html::linkRoute('todos.create','Create New List',null,['class'=>'success button'])}}

@stop