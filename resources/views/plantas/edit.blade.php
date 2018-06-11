@extends('/layoutProyect')

 @section('editPlanta')
 <h4>Editar</h4>
{!! Form::model($planta, ['route' => ['plantas.update',$planta->id],'method'=>'put'])!!}

	{!! Form::text('temperatura', null,['placeholder'=>'Temperatura']);!!}
	{!! Form::text('humedadAire', null,['placeholder'=>'Humedad del aire']);!!}
	{!! Form::text('humedadTierra', null,['placeholder'=>'Humedad de la tierra']);!!}
	{!! Form::text('fechaDato', null,['id'=>'datepicker']);!!}
	{!! Form::select('caja_id', $caja); !!}

	{!! Form::button('Actualizar',['type'=>'submit','class'=>'waves-effect waves-light btn blue darken-1']) !!}
	{!! Form::close()!!}
@endsection
