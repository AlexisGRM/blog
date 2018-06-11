
@extends('/layout')

@section('indexCategory')
    <div class="container" style="margin:2% 0px 0px 1%;">
    <a href="/categories/create" style="text-decoration: none;color:red;font-family:arial;">Create</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>Acciones</th>
      </tr>
      @foreach($categories as $category)
      <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->description }}</td>
        <td>
        {!! Form::open(['url' => '/categories/'.$category->id, 'method' => 'delete','onsubmit'=>'return ConfirmDelete()']) !!}
        <a href="{!! '/categories/'.$category->id.'/edit' !!}" class="waves-effect waves-light btn orange"><i class="material-icons right">edit</i>Editar</a>
        {!! Form::button('<i class="material-icons right">delete</i>Borrar',['type'=>'submit','class'=>'waves-effect waves-light btn red']) !!}
        {!! Form::close() !!}
       </td>
      </tr>
      @endforeach
    </table>
  </div>
@endsection
