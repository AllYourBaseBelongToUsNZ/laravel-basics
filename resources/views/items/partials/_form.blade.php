{{{Form::text('content')}}}

{!!$errors->first('content','<div data-alert class="alert-box alert radius">:message</div>')!!}

<input type="hidden" name="_token" value="{{ csrf_token() }}">

{{Form::submit('Save',array('class'=>'button'))}}