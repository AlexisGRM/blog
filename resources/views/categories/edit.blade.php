<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Editar</h1>
	{!! Form::model($category, ['route' => ['categories.update',$category->id],'method'=>'put'])!!}
	{!! Form::text('description', null);!!}
	{!! Form::button('Actualizar',['type'=>'submit']) !!}
	{!! Form::close()!!}
</body>
</html>