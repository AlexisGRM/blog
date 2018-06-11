@extends('/layoutProyect')

 @section('indexCajas')
<h3 class="m3">Cajas</h3>
<table class="table centered striped">
	<tr>
		<th class="center">ID</th>
		<th class="center">Descripcion</th>
		<th class="center">Cliente(s)</th>
    <th class="center">Acciones</th>
	</tr>
	<tr>
		@foreach($cajas as $caja)
		<td>{{$caja->id}}</td>
		<td>{{$caja->description}}</td>
		<td>{{$caja->cdesc}} {{$caja->cdescc}}</td>

		<td>
			{!! Form::open(['url' => '/cajas/'.$caja->id,'method'=>'delete','onsubmit'=>'return ConfirmDelete()']) !!}

			<a class="waves-effect waves-light btn light-blue darken-3" href="{!! '/cajas/'.$caja->id.'/edit' !!}"><i class="material-icons right">edit</i>Editar</a>

			{!! Form::button('<i class="material-icons right">delete</i>Borrar',['type'=>'submit','class'=>'waves-effect waves-light btn red']) !!}

			{!! Form::close()!!}
		</td>

	</tr>
	@endforeach
</table></br>
<div class="row">
<div class="col s5 offset-s9">
<a class="waves-effect waves-light btn light-blue darken-1" href="/cajas/create"><i class="material-icons right">add</i>agregar caja</a><br>
</div>
</div>
@endsection
