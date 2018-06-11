@extends('/layout')

@section('createCategory')
<div class="container" style="margin:2% 0px 0px 1%;">
    <h1>Ingresar</h1>
    {!! Form::open(['url' => '/categories', 'method' => 'post']) !!}
    <div class="input-field">
      {!! Form::text('description', null, ['class'=>'validate','id'=>'']);!!}
      {!! Form::label('description');!!}
    </div>
    {!! Form::button('Aceptar',['type'=>'submit','class'=>'waves-effect waves-light btn red'])   !!}
    {!! Form::close() !!}
  </div>
@endsection
