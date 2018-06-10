{!! Form::model($planta, ['route' => ['plantas.update',$planta->id],'method'=>'put'])!!}

	{!! Form::text('temperatura', null);!!}
	{!! Form::text('humedadAire', null);!!}
	{!! Form::text('humedadTierra', null);!!}
	{!! Form::text('fechaDato', null);!!}
	{!! Form::select('caja_id', $caja); !!}
	
	{!! Form::button('Actualizar',['type'=>'submit']) !!}
	{!! Form::close()!!}