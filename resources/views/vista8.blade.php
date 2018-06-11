@extends('layouts.app')

@section('content')

<div class="form-group">
    <form action="vista8" method="get">
      <h3>Conversion de dolar</h3><br/>
        <select name="conv" id="sel">
            <option value="1">Euros</option>
            <option value="2">Libras</option>
            <option value="3">Yen</option>
            <option value="4">Yuan</option>
            <option value="5">Rublo</option>
        </select>
        <input type="text" id="input1" name="a">
<button type="submit" value="conv">Conversión</button>

<?php
if (isset($_GET['conv'])) {
        operacion($_GET['conv'],$_GET['a']);
    }
    function operacion($conv,$a){
        switch ($conv) {
    case 1:
        $result = $a*0.84726;
        echo "Euros: ".$result;
        break;
    case 2:
        $result = $a*0.74021;
        echo "Libras: ".$result;
        break;
    case 3:
        $result = $a*110.45;
        echo "Yen: ".$result;
        break;
    case 4:
        $result = $a*6.3662;
        echo "Yuan: ".$result;
        break;
    case 5:
        $result = $a*61.896;
        echo "Rublo: ".$result;
        break;
}
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
