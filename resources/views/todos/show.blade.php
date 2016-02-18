@extends ('layouts.main')
@section('content')

 <div class="large-12 columns">

	<h3>{{{$list->name}}}</h3>
	{{ Html::linkRoute('todos.index','Back')}}

</div>
@stop