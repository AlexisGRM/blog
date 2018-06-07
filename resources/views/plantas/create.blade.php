<h1>Hola mundo</h1>
	{!! Form::open(['url' => '/plantas','method'=>'post']) !!}
	{!! Form::text('', null,['placeholder'=>'Description']);!!}
	{!! Form::button('Aceptar',['type'=>'submit']) !!}
	{!! Form::close()!!}