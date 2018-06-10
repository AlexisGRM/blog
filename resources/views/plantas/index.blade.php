<a href="/plantas/create">Create</a><br>
<table class="table">
	<tr>
		<th>ID</th>
		<th>temperatura</th>
		<th>humedadAire</th>
		<th>humedadTierra</th>
		<th>fechaDato</th>
		<th>Caja</th>
	</tr>
	<tr>
		@foreach($plantas as $planta)
		<td>{{$planta->id}}</td>
		<td>{{$planta->temperatura}}</td>
		<td>{{$planta->humedadAire}}</td>
		<td>{{$planta->humedadTierra}}</td>
		<td>{{$planta->fechaDato}}</td>
		<td>{{$planta->caja_id}}</td>
		<td>
			{!! Form::open(['url' => '/plantas/'.$planta->id,'method'=>'delete']) !!}
			
			<a class="waves-effect waves-light btn-small" href="{!! '/plantas/'.$planta->id.'/edit' !!}">Editar</a>

			{!! Form::button('Delete',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}

			{!! Form::close()!!}
		</td>
		
	</tr>
	@endforeach

</table>