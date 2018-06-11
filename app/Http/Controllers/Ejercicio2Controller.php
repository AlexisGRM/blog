<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{

    public function operaciones(Request $request) {
      $num1 = $request -> Valor1;
      $num2 = $request -> Valor2;
      $a = $request -> Valor3;
      $b = $request -> Valor4;
      $a2 = $request -> Valor5;
      $b2 = $request -> Valor6;
      $c2 = $request -> Valor7;
      $n = $request -> Valor8;
      $num = $request -> Valor9;

      //operaciones aritmeticas basicas
      $suma = $num1 + $num2;
      $resta = $num1 - $num2;
      $multiplicacion = $num1 * $num2;
      $division = $num1 / $num2;

      //Teorema de Pitagoras
      $pitagoras = pow($a,2);
      $pitagoras = pow($pitagoras,2);

      //formula general
      $v1 = -$b2;
      $v2 =pow($b2,2)-4*$a2*$c2;
      $v3 = sqrt($v2);
      $x1 = $v1 + $v3;
      $x1 = $x1/2*$a2;

      $x2 = $v1 - $v3;
      $x2 = $x2/2*$a2;

      //Lista de numeros
     //-> en html
     if ($n <= 50) {
       for ($i = 1; $i <= $n; $i++) {
         for ($j = 1; $j <= $i; $j++) {
           $i;
         }
       }
     $val = $val +$i;
     $val = $val,",",$i;
      //Tablas
      //-> en html

      //=>html
      return view('Ejercicio2',
      ['suma'=>$suma,'resta'=>$resta,'multiplicacion'=>$multiplicacion,'division'=>$division,
      'pitagoras'=>$pitagoras,
      'a'=>$a2,'b'=>$b2,'c'=>$c2,
      'x1'=>$x1,'x2'=>$x2,
      'n'=>$n,'val'=>$val;,
    'num'=>$num]);
    }
}
