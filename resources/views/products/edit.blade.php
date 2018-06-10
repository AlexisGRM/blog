 <h1>Editar</h1>
	{!! Form::model($product, ['route' => ['products.update',$product->id],'method'=>'put'])!!}
	{!! Form::text('name', null);!!}
	{!! Form::text('description', null);!!}
	{!! Form::select('category_id', $categories); !!}
	{!! Form::text('price', null);!!}
	{!! Form::button('Actualizar',['type'=>'submit']) !!}
	{!! Form::close()!!}