@extends('layouts.app')

@section('content')
<div class="form-group">
  <h3>Teorema de Pitagoras</h3><br/>
<form action="vista" method="get">
<label for="">A: </label><input type="text" name="a">
<label for="">B: </label><input type="text" name="b">
<input type="submit" value="ok">
</form>
</div>
<?php
if (isset($_GET['a'])) {
  operacion($_GET['a'],$_GET['b']);
}
function operacion($a,$b){
$valorC = ($a*$a)+($b*$b);
	$result = sqrt($valorC);
	echo "Cateto A: ".$a."</br>";
	echo "Cateto B: ".$b."</br>";
	echo "Resultado Hipotenusa: ".$result."</br>"."</br>";
}
 ?>

@endsection
