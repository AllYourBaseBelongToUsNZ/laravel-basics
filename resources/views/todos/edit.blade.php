@extends ('layouts.main')
@section('content')
{{Form::model($lists, array('method'=>'put','route' => array('todos.update', $lists->id)))}}



	
	<h3>{{Form::label('title','List Title')}}</h3>
		
		@include('todos.partials._form')



	{{Form::close()}}

@stop