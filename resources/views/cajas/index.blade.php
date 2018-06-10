<a href="/cajas/create">Create</a><br>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Description</th>
		<th>Cliente</th>
	</tr>
	<tr>
		@foreach($cajas as $caja)
		<td>{{$caja->id}}</td>
		<td>{{$caja->description}}</td>
		<td>{{$caja->cliente_id}}</td>

		<td>
			{!! Form::open(['url' => '/cajas/'.$caja->id,'method'=>'delete']) !!}
			
			<a class="waves-effect waves-light btn-small" href="{!! '/cajas/'.$caja->id.'/edit' !!}">Editar</a>

			{!! Form::button('Delete',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}

			{!! Form::close()!!}
		</td>
		
	</tr>
	@endforeach

</table>