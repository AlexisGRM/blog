@extends('../layout')
@section('primero')

	<h1>Hola mundo</h1>
	{!! Form::open(['url' => '/categories','method'=>'post']) !!}

	{!! Form::text('description', null,['placeholder'=>'Description']);!!}

	{!! Form::button('Aceptar',['type'=>'submit']) !!}
	
	{!! Form::close()!!}


@endsection