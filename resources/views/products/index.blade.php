@extends('/layout')

@section('indexProduc')
<script>
  function ConfirmDelete(){
    var x = confirm('Estas seguro?');
    //mostrar en consola //
    console.log(x);
    if(x){
      return true;
    }
    else{
      return false;
    }
  }
</script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a class="waves-effect waves-light btn" href="/products/create">Crear</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Categoria</th>
        <th>Pricio</th>
        <th>Acciones</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td>{{ $product->id }}</td>s
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->cdesc }}</td>
        <td>${{ $product->price }}</td>
        <td>
        {!! Form::open(['url' => '/products/'.$product->id, 'method' => 'delete','onsubmit'=>'return ConfirmDelete()']) !!}
        <a href="{!! '/products/'.$product->id.'/edit' !!}" class="waves-effect waves-light btn orange"><i class="material-icons right">edit</i>Editar</a>
        {!! Form::button('<i class="material-icons right">delete</i>Borrar',['type'=>'submit','class'=>'waves-effect waves-light btn red']) !!}
        {!! Form::close() !!}
       </td>
      </tr>
      @endforeach
    </table>
  </body>
</html>
@endsection
