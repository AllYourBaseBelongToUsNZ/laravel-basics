@extends ('layouts.main')
@section('content')

 <div class="large-12 columns">

	<h2>{{{$list->name}}}</h2>

		@foreach($item as $items) 

			<h4>{{{$items->content}}}</h4>

		@endforeach

		<ul class = "no-bullet button-group">

			<li>

			 {{Html::linkRoute('todos.items.create','Add new item',[$list->id],['class'=>'success button'])}} 
			</li>

		</ul>


	{{ Html::linkRoute('todos.index','Back',null,['class'=>'button'])}}

</div>
@stop