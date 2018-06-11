@extends('/layout')

@section('editCategory')
    <div class="container" style="margin:2% 0px 0px 1%;">
    <h1>Edit</h1>

    {!! Form::model($category, ['route'=>['categories.update', $category->id],'method'=> 'put']) !!}
    {!! Form::text('description', null); !!}
    {!! Form::button('Actualizar',['type'=>'submit']) !!}
    {!! Form::close() !!}
    </div>
@endsection
