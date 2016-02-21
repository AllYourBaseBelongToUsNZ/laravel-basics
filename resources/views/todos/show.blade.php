@extends ('layouts.main')
@section('content')

 <div class="large-12 columns">

	<h2>{{{$list->name}}}</h2>

		@foreach($item as $items) 

			<h4>{{{$items->content}}}</h4>

		@endforeach


	{{ Html::linkRoute('todos.index','Back')}}

</div>
@stop