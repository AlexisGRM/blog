
        <h1>Editar</h1>
	{!! Form::model($cliente, ['route' => ['clientes.update',$cliente->id],'method'=>'put'])!!}

	{!! Form::text('nombre', null);!!}
	{!! Form::text('apeMaterno', null);!!}
	{!! Form::text('apePaterno', null);!!}
	{!! Form::text('telefono', null);!!}
	{!! Form::text('email', null);!!}

	{!! Form::button('Actualizar',['type'=>'submit','class'=>'waves-effect waves-light btn']) !!}
	{!! Form::close()!!} 
