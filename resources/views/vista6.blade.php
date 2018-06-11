@extends('layouts.app')

@section('content')

<div class="form-group">
  <h3>Derivadas</h3><br/>
  <h4>f(x)= u^k su derivada es</h4>
  <h4>f(x)= k * u^k-¹</h4>

  <h4>Ejemplo f(x)=2x³, su derivada es:</h4>
  <h4>f(x)= 2(3 * x³-¹)=6x²</h4>
  <form action="vista6" method="get">
      <input type="text" id="input1" name="a">
      <input type="text" id="input1" name="b">
<button type="submit" value="conv">Resultado</button>
</form>
<div>
<?php
if (isset($_GET['a'])) {
      operacion($_GET['a'],$_GET['b']);
  }
  function operacion($a,$b){
      $calc = $a * $b;
      $exp = $b -1;

      echo "Resultado: ".$calc."^".$exp;
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
