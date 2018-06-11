@extends('layouts.app')

@section('content')

<div class="form-group row">
      <form action="vista9" method="get">
        <h3>Pendiente de una recta</h3><br/>
          <input type="text"  name="a"  placeholder="X1"> <input type="text"  name="b"  placeholder="Y1">
          <input type="text"  name="a1" placeholder="X2"> <input type="text"  name="b1" placeholder="Y2">
  <button type="submit" value="conv">Resultado</button>
  </form>
</div>
  <?php
  if (isset($_GET['a'])) {
          operacion($_GET['a'],$_GET['b'],$_GET['a1'],$_GET['b1']);
      }
      function operacion($a,$b,$a1,$b1){

          $calc = $b1 - $b / $a1 - $a;
          echo "Resultado: ".$calc;
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
