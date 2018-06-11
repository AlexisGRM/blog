@extends('layouts.app')

@section('content')
<div class="form-group">
<form action="vista4" method="get">
<h3>Binomio al cubo</h3><br/>
<label for="">A: </label><input type="text" name="a">
<label for="">B: </label><input type="text" name="b">
<label for="">C: </label><input type="text" name="c">
<input type="submit" value="ok">
</form>
</div>
<?php
if (isset($_GET['a'])) {
  operacion($_GET['a'],$_GET['b'],$_GET['c']);
}
function operacion($a,$b,$c){
  $n = -1;

  	$paso1 = sqrt(pow($b,2)-(4*($a*$c)));
  	$paso2 = 2*$a;
  	$paso3 = (($n*$b)+$paso1)/$paso2;
  	$paso4 = (($n*$b)-$paso1)/$paso2;

  	echo "resultado X1: ".$paso3."</br>";
  	echo "resultado X2: ".$paso4."</br>"."</br>";

}
?>
@endsection
