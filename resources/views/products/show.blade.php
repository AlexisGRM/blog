@extends('/layout')

@section('showProduc')
  <h1>El nombre del product  {{$product -> id}} es:  {{$product -> name}}</h1>
@endsection
