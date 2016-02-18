@extends ('layouts.main')
@section('content')
{{Form::open(array('route'=>'todos.store'))}}

	<h3>{{Form::label('title','List Title')}}</h3>

	{{{Form::text('title')}}}

	{!!$errors->first('title','<div data-alert class="alert-box">:message</div>')!!}

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	{{Form::submit('submit',array('class'=>'button'))}}

{{Form::close()}}

@stop