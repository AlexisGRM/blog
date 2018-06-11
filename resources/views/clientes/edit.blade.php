@extends('/layoutProyect')

@section('editClientes')
  <h4>Editar</h4>
	{!! Form::model($cliente, ['route' => ['clientes.update',$cliente->id],'method'=>'put'])!!}

	{!! Form::text('nombre', null,['placeholder'=>'Nombre(s)']);!!}
	{!! Form::text('apeMaterno', null,['placeholder'=>'Apellido paterno']);!!}
	{!! Form::text('apePaterno', null,['placeholder'=>'Apellido materno']);!!}
	{!! Form::text('telefono', null,['placeholder'=>'Telefono']);!!}
	{!! Form::text('email', null,['placeholder'=>'Email']);!!}

	{!! Form::button('Actualizar',['type'=>'submit','class'=>'waves-effect waves-light btn blue darken-1']) !!}
	{!! Form::close()!!}

@endsection
