@extends('layouts.app')

@section('content')

<div class="form-group">
<form action="vista7" method="get">
  <h3>Tablas</h3><br/>
<label for="">A: </label><input type="text" name="a">
<input type="submit" value="ok">
</form>
</div>
<?php
if (isset($_GET['a'])) {
  operacion($_GET['a']);
}
function operacion($a){
$cont=0;
       echo "<h2>Tabla de Suma</h2>";
       echo "<table>
       <tr class='tabla'>";
       for ($i=0; $i <=$a ; $i++) {
           if($i==0){
               echo "<th>+</th>";
           }else {
               echo "<th>".$i."</th>";
           }
       }
       echo "</tr>";
   for ($i=1; $i <=$a; $i++) {
       echo "<tr>";
       echo "<td>".$i."</td>";
       $cont++;

       for ($e=0; $e <$a ; $e++) {
           echo "<td>".($i+$cont)."</td>";
           $cont++;
       }
       $cont=0;
       echo "</tr>";
   }
   echo "</table> <br>";


   $cont2=0;
   echo "<h2>Tabla de Multiplicar</h2>";
   echo "<table>
   <tr class='tabla'>";

       for ($i=0; $i <=$a ; $i++) {
       if($i==0){
           echo "<th>X</th>";
       }else {
             echo "<th >".$i."</th>";
       }

   }
   echo "</tr>";

   for ($i=1; $i <=$a ; $i++) {
       echo "<tr>";

       echo "<td>".$i."</td>";
       $cont2++;

       for ($u=0; $u <$a ; $u++) {

           echo "<td>".($i*$cont2)."</td>";
           $cont2++;
       }
       $cont2=0;
       echo "</tr>";
   }

   echo "</table> <br>";
}
?>

  @if(Auth::user()->level==1)
	<div class="form-group row mb-0">
			<div class="col-md-10 offset-md-2">
				<h2>Lo sentimos el acceso es solo para administradores</h2>
				<a class="btn waves-effect waves-light white-text bottom mb-1 offset-md-3" href="home">
					<button type="submit" class="btn waves-effect waves-light white-text mb-1 bottom">
							{{ __('Regresar') }}
					</button>
					</a>
			</div>
	</div>
	@endif
@endsection
