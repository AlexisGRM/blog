@extends('/layoutProyect')

@section('indexClientes')
<h3 class="m3">Clientes</h3>
  <table class="table centered striped">
	<tr>
		<th class="center">ID</th>
		<th class="center">Nombre(s)</th>
		<th class="center">Apellido materno</th>
		<th class="center">Apellido paterno</th>
		<th class="center">Telefono</th>
		<th class="center">Email</th>
		<th class="center">Acciones</th>
	</tr>
	<tr>
		@foreach($cliente as $clientes)
		<td>{{$clientes->id}}</td>
		<td>{{$clientes->nombre}}</td>
		<td>{{$clientes->apeMaterno}}</td>
		<td>{{$clientes->apePaterno}}</td>
		<td>{{$clientes->telefono}}</td>
		<td>{{$clientes->email}}</td>
		<td>
			{!! Form::open(['url' => '/clientes/'.$clientes->id,'method'=>'delete','onsubmit'=>'return ConfirmDelete()']) !!}
			<a class="waves-effect waves-light btn light-blue darken-3" href="{!! '/clientes/'.$clientes->id.'/edit' !!}"><i class="material-icons right">edit</i>Editar</a>
			{!! Form::button('<i class="material-icons right">delete</i>Borrar',['type'=>'submit','class'=>'waves-effect waves-light btn red']) !!}
			{!! Form::close()!!}
		</td>

	</tr>
	@endforeach
</table>
</br>
<div class="row">
<div class="col s5 offset-s9">
<a class=" waves-effect waves-light btn light-blue darken-1 " href="/clientes/create"><i class="material-icons right">add</i>agregar cliente</a><br>
</div>
</div>
@endsection
