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
    <a class="waves-effect waves-light btn" href="/products/create">Crear</a>
    <table class="striped centered">
      <tr>
        <th class="center">ID</th>
        <th class="center">Nombre</th>
        <th class="center">Descripcion</th>
        <th class="center">Categoria</th>
        <th class="center">Precio</th>
        <th class="center">Acciones</th>
      </tr>
      @foreach($products as $product)
      <tr>
        <td><a href="{!! '/products/'.$product->id !!}">{{$product -> id}}</a></td>
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
      {{$products->links()}}
  </body>
</html>
@endsection
