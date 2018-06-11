@extends('layouts.app')

@section('content')
<div class="form-group">
<form action="vista2" method="get">
<h3>Binomio al cuadrado</h3><br/>
<label for="">A</label><input type="text" name="a">
<label for="">B</label><input type="text" name="b">
<input type="submit" value="ok">
</form>
</div>
<?php
if (isset($_GET['a'])) {
  operacion($_GET['a'],$_GET['b']);
}
function operacion($a,$b){
echo "<h1>Binomio al cuadrado</h1>";
$binomio = (pow($a,2) + pow($b,2) + (($a*$b)*2));
echo "Resultado: ".$binomio;
}
?>
@endsection
