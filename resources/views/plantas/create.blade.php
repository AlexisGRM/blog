@extends('/layoutProyect')

 @section('createPlanta')

<h4 class="header center light-blue-text">Crear plantas</h4>

	{!! Form::open(['url' => '/plantas','method'=>'post']) !!}
	{{ csrf_field() }}
	{!! Form::text('temperatura', null,['placeholder'=>'Temperatura']);!!}
	{!! Form::text('humedadAire', null,['placeholder'=>'Humedad del aire']);!!}
	{!! Form::text('humedadTierra', null,['placeholder'=>'Humedad de la tierra']);!!}
	{!! Form::text('fechaDato', null,['placeholder'=>'Fecha','id'=>'datepicker']);!!}
	<!--{!! Form::text('ca', null,['placeholder'=>'category']);!!}-->
	{!! Form::select('caja_id', $caja); !!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small blue darken-1']) !!}


	{!! Form::close()!!}
@endsection
