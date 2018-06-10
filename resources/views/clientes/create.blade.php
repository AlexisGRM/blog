
     	<h1>Crear</h1>
	{!! Form::open(['url' => '/clientes','method'=>'post']) !!}
	
	{!! Form::text('nombre', null,['placeholder'=>'nombre']);!!}
	{!! Form::text('apeMaterno', null,['placeholder'=>'apellido paterno']);!!}
	{!! Form::text('apePaterno', null,['placeholder'=>'apellido materno']);!!}
	{!! Form::text('telefono', null,['placeholder'=>'telefono']);!!}
	{!! Form::text('email', null,['placeholder'=>'email']);!!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}
	{!! Form::close()!!}
         
