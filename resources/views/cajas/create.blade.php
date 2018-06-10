<h1 class="header center orange-text">Crear producto</h1>

	{!! Form::open(['url' => '/cajas','method'=>'post']) !!}
	{{ csrf_field() }}
	{!! Form::text('description', null,['placeholder'=>'Description']);!!}
	<!--{!! Form::text('ca', null,['placeholder'=>'category']);!!}-->
	{!! Form::select('cliente_id', $clientes); !!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}
  
	
	{!! Form::close()!!}
