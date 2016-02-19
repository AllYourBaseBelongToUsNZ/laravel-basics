@extends ('layouts.main')
@section('content')

{{Form::model($lists, array('method'=>'put','route' => array('todos.update', $lists->id)))}}


	<h3>{{Form::label('title','List Title')}}</h3>

	{{{Form::text('name')}}}

	{!!$errors->first('name','<div data-alert class="alert-box">:message</div>')!!}

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	{{Form::submit('update',array('class'=>'button'))}}

{{Form::close()}}

@stop