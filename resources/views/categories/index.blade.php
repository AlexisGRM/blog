@extends('../layout')
@section('primero')
<a href="/categories/create">Create</a><br>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Description</th>
		<th>Acciones</th>
	</tr>
	<tr>
		@foreach($categories as $category)
		<td>{{$category->id}}</td>
		<td>{{$category->description}}</td>
		<td>
			{!! Form::open(['url' => '/categories/'.$category->id,'method'=>'delete']) !!}
			<a href="{!! '/categories/'.$category->id.'/edit' !!}">Editar</a>
			{!! Form::button('Delete',['type'=>'submit']) !!}
			{!! Form::close()!!}
		</td>
		
	</tr>
	@endforeach

</table>
@endsection
