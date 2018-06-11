@extends('/layoutProyect')

 @section('editCajas')
<h4>Editar</h4>
	{!! Form::model($caja, ['route' => ['cajas.update',$caja->id],'method'=>'put'])!!}

	{!! Form::text('description', null,['placeholder'=>'Description']);!!}
	{!! Form::select('cliente_id', $clientes); !!}

	{!! Form::button('Actualizar',['type'=>'submit','class'=>'waves-effect waves-light btn blue darken-1']) !!}
	{!! Form::close()!!}
@endsection
