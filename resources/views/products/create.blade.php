@extends('design')

@section('primero')



<h1 class="header center orange-text">Crear producto</h1>
	{!! Form::open(['url' => '/products','method'=>'post']) !!}
	{{ csrf_field() }}
	{!! Form::text('name', null,['placeholder'=>'name']);!!}
	{!! Form::text('description', null,['placeholder'=>'Description']);!!}
	<!--{!! Form::text('ca', null,['placeholder'=>'category']);!!}-->
	{!! Form::select('category_id', $categories); !!}

	{!! Form::text('price', null,['placeholder'=>'price']);!!}

	{!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn-small']) !!}
  
	
	{!! Form::close()!!}

	@endsection