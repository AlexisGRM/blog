@extends('design')

@section('primero')

<h1 class="header center orange-text">Productos</h1>
<a href="/products/create">Create</a><br>

<table class="table">
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>description</th>
		<th>Category</th>
		<th>price</th>
	</tr>
	<tr>
		@foreach($products as $product)
		<td>{{$product->id}}</td>
		<td>{{$product->name}}</td>
		<td>{{$product->description}}</td>
		<td>{{$product->category_id}}</td>
		<td>{{$product->price}}</td>
		<td>
			{!! Form::open(['url' => '/products/'.$product->id,'method'=>'delete']) !!}
			
			<a class="waves-effect waves-light btn-small" href="{!! '/products/'.$product->id.'/edit' !!}"><i class="material-icons left">android</i>Editar</a>

			{!! Form::button('Delete',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}

			{!! Form::close()!!}
		</td>
		
	</tr>
	@endforeach

</table>

@endsection