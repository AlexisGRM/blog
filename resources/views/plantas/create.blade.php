<h1>Crear plantas</h1>

	{!! Form::open(['url' => '/plantas','method'=>'post']) !!}
	{{ csrf_field() }}
	{!! Form::text('temperatura', null,['placeholder'=>'temperatura']);!!}
	{!! Form::text('humedadAire', null,['placeholder'=>'humedadAire']);!!}
	{!! Form::text('humedadTierra', null,['placeholder'=>'humedadTierra']);!!}
	{!! Form::text('fechaDato', null,['placeholder'=>'FechaDato']);!!}
	<!--{!! Form::text('ca', null,['placeholder'=>'category']);!!}-->
	{!! Form::select('caja_id', $caja); !!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}
  
	
	{!! Form::close()!!}