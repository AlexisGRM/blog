@extends('../layout')

@section('editProduct')
<!DOCTYPE html>

      <h2>Editar</h2>
    {!! Form::model($product, ['route'=>['products.update', $product->id],'method'=> 'put']) !!}
    {!! Form::text('name', null); !!}
    {!! Form::text('description', null); !!}
    <div class="input-field">
    {!! Form::select('category_id', $categories, $product->category_id);!!}
    </div>
    {!! Form::number('price', null); !!}
    {!! Form::button('Actualizar',['type'=>'submit','class'=>'waves-effect waves-light btn blue']) !!}
    {!! Form::close() !!}




@endsection
