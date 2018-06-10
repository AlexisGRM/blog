
     	
  <a href="/clientes/create">Crear nuevo</a><br>
  <table class="table">
	<tr>
		<th>ID</th>
		<th>nombre</th>
		<th>apellido materno</th>
		<th>apellido paterno</th>
		<th>telefono</th>
		<th>email</th>
		<th>Acciones</th>
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
			{!! Form::open(['url' => '/clientes/'.$clientes->id,'method'=>'delete']) !!}
			<a class="waves-effect waves-light btn" href="{!! '/clientes/'.$clientes->id.'/edit' !!}">Editar</a>
			{!! Form::button('Delete',['type'=>'submit','class'=>'waves-effect waves-light btn']) !!}
			{!! Form::close()!!}
		</td>
		
	</tr>
	@endforeach

</table> 