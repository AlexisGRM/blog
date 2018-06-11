@extends('/layoutProyect')

 @section('createCajas')
<h4 class="header center light-blue-text">Crear producto</h4>

	{!! Form::open(['url' => '/cajas','method'=>'post']) !!}
	{{ csrf_field() }}
	{!! Form::text('description', null,['placeholder'=>'Description']);!!}
	<!--{!! Form::text('ca', null,['placeholder'=>'category']);!!}-->
	{!! Form::select('cliente_id', $clientes); !!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small blue darken-1']) !!}


	{!! Form::close()!!}
@endsection
