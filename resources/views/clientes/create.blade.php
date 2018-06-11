@extends('/layoutProyect')

 @section('createClientes')
  <h4 class="header center light-blue-text">Crear</h4>
	{!! Form::open(['url' => '/clientes','method'=>'post']) !!}

	{!! Form::text('nombre', null,['placeholder'=>'Nombre(s)']);!!}
	{!! Form::text('apeMaterno', null,['placeholder'=>'Apellido paterno']);!!}
	{!! Form::text('apePaterno', null,['placeholder'=>'Apellido materno']);!!}
	{!! Form::text('telefono', null,['placeholder'=>'Telefono']);!!}
	{!! Form::text('email', null,['placeholder'=>'Email']);!!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small blue darken-1']) !!}
	{!! Form::close()!!}
@endsection
