@extends('layout')

@section('createProduct')


    <h5>Create</h5>
    {!! Form::open(['url' => '/products', 'method' => 'post']) !!}
    <div class="input-field ">
      {!! Form::text('name', null, ['class'=>'validate','id'=>'name']);!!}
      {!! Form::label('name','Ingresar un nombre');!!}
    </div>
    <div class="input-field ">
      {!! Form::text('description', null, ['class'=>'validate','id'=>'description']);!!}
      {!! Form::label('description', 'Ingresa una descripcion');!!}
    </div>
    <div class="input-field ">
    {!! Form::select('category_id', $categories);!!}
    </div>
    <div class="input-field ">
      {!! Form::number('price', null, ['class'=>'validate','id'=>'price','step'=>'any']);!!}
      {!! Form::label('price','Ingresa un precio');!!}
    </div>
    {!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn red'])   !!}
    {!! Form::close() !!}

@endsection
