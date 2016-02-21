@extends ('layouts.main')
@section('content')
  <h3>Show all list items</h3>


  @foreach ($todo_lists as $list)

  <h3>{{ Html::linkRoute('todos.show', $list->name, array($list->id)) }}</h3>

   <ul class="button-group">
    <li>{{Html::linkRoute('todos.edit','Edit',[$list->id],['class'=>'tiny default button'])}} </li>
    <li>{{Form::model($list,['route'=>['todos.destroy',$list->id],'method'=>'delete'])}}</li>
    <li>{{Form::button('Delete',['type'=>'submit','class'=>'tiny alert button deletebtn'])}}</li>
    <li>{{Form::close()}}</li>
  </ul>




  @endforeach

  <hr>

  {{ Html::linkRoute('todos.create','Create New List',null,['class'=>'success button'])}}

@stop