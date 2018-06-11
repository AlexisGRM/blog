@extends('/layoutProyect')

 @section('indexPlanta')
 <h3 class="m3">Plantas</h3>
<table class="table centered striped">
	<tr>
		<th class="center">ID</th>
		<th class="center">Temperatura</th>
		<th class="center">Humedad del aire</th>
		<th class="center">Humedad de la tierra</th>
		<th class="center">Fecha</th>
		<th class="center">Caja</th>
    <th class="center">Acciones</th>
	</tr>
	<tr>
		@foreach($plantas as $planta)
		<td>{{$planta->id}}</td>
		<td>{{$planta->temperatura}} °F</td>
		<td>{{$planta->humedadAire}} %</td>
		<td>{{$planta->humedadTierra}} %</td>
		<td>{{$planta->fechaDato}}</td>
		<td>{{$planta->cdesc}}</td>
		<td>
			{!! Form::open(['url' => '/plantas/'.$planta->id,'method'=>'delete','onsubmit'=>'return ConfirmDelete()']) !!}

			<a class="waves-effect waves-light btn light-blue darken-3" href="{!! '/plantas/'.$planta->id.'/edit' !!}"><i class="material-icons right">edit</i>Editar</a>

			{!! Form::button('<i class="material-icons right">delete</i>Borrar',['type'=>'submit','class'=>'waves-effect waves-light btn red']) !!}

			{!! Form::close()!!}
		</td>
	</tr>
	@endforeach
</table></br>
<div class="row">
<div class="col s5 offset-s9">
<a class="waves-effect waves-light btn light-blue darken-1" href="/plantas/create"><i class="material-icons right">add</i>agregar planta</a><br>
</div>
</div>
@endsection
