@extends ('layouts.main')
@section('content')

<div class="section-list"> 

{!! Form::open(array('route' => ['todos.items.store',$todo_list->id] )) !!}

	@include('items.partials._form')

{!!Form::close() !!}

</div>

@stop