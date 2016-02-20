{{{Form::text('name')}}}

{!!$errors->first('name','<div data-alert class="alert-box alert radius">:message</div>')!!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

{{Form::submit('update',array('class'=>'button'))}}