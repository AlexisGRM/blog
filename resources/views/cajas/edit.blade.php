<h1>Editar</h1>
	{!! Form::model($caja, ['route' => ['cajas.update',$caja->id],'method'=>'put'])!!}

	{!! Form::text('description', null);!!}
	{!! Form::select('cliente_id', $clientes); !!}

	{!! Form::button('Actualizar',['type'=>'submit']) !!}
	{!! Form::close()!!}