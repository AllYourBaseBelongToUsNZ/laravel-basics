@extends ('layouts.main')
@section('content')
  <h3>Show all list items</h3>


  @foreach ($todo_lists as $list)
  <ul>
    <li>{{{$list->name}}}</li>
  </ul>
  @endforeach

@stop