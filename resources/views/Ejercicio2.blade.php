
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Homework</title>
      </head>
      <body>
        <h1>Homework</h1>
        <h2>Operaciones Aritmeticas Basicas</h2>
        <h4>Suma: {{$suma}}</h4>
        <h4>Resta: {{$resta}}</h4>
        <h4>Multiplicacion: {{$multiplicacion}}</h4>
        <h4>Division: {{$division}}</h4>

        <h2>Teorema de pitagoras</h2>
        <h4>El valor de C es : {{$pitagoras}}</h4>

        <h2>Formula General</h2>
        <h4>El valor de A es : {{$a}}</h4>
        <h4>El valor de B es : {{$b}}</h4>
        <h4>El valor de C es : {{$c}}</h4>
        <h4>El valor de X1 es : {{$x1}}</h4>
        <h4>El valor de X2 es : {{$x2}}</h4>

        <h2>Lista de numeros</h2>
        <h4>El limite de la lista de numeros es : {{$n}}</h4>
        <h4>{{$val}}</h4>
        <?php
        /*
        if ($n <= 50) {
          for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $i; $j++) {
             echo $i,"<br>";
            }
          }
        }else{
          echo "El limite de la lista de numeros es 50 <br>";
          echo "Ingrese otro numero por favor <br>";
        }
        */
      //Tabla de suma
    if($num>=1){
    $cont=0;
    echo "<h1>Tabla de Suma</h1>";
    echo "<table>
    <tr class='tabla'>";
    for ($i=0; $i <=$num ; $i++) {
        if($i==0){
            echo "<th>+</th>";
        }else {
              echo "<th>".$i."</th>";
        }

    }
    echo "</tr>";
    for ($i=1; $i <=$num ; $i++) {
        echo "<tr>";
        echo "<td>".$i."</td>";
        $cont++;


        for ($a=0; $a <$num ; $a++) {
            echo "<td>".($i+$cont)."</td>";


            $cont++;
        }
        $cont=0;
        echo "</tr>";

    }
    echo "</table> <br>";

 // Tabla de multiplicar
    $cont2=0;
    echo "<h1>Tabla de Multiplicar</h1>";
    echo "<table>
    <tr class='tabla'>";

        for ($i=0; $i <=$num ; $i++) {
        if($i==0){
            echo "<th>X</th>";
        }else {
              echo "<th >".$i."</th>";
        }

    }
    echo "</tr>";

    for ($i=1; $i <=$num ; $i++) {
        echo "<tr>";

        echo "<td>".$i."</td>";
        $cont2++;

        for ($a=0; $a <$num ; $a++) {

            echo "<td>".($i*$cont2)."</td>";
            $cont2++;
        }
        $cont2=0;
        echo "</tr>";
    }

    echo "</table> <br>";
}
else {
    echo "Tu numero es Menor, debe ser mayor a ".$num;
}
         ?>

      </body>
    </html>

      <?php
      /*
      echo "Operaciones Aritmeticas Basicas <br>";
      echo "Suma<br>";

      $result;

      $result = $num1 + $num2;
      echo "La suma de los numeros ",$num1," y ",$num2," es ", $result,"<br>";
      echo "Resta<br>";
      $result = $num1 - $num2;
      echo "La resta de los numeros ",$num1," y ",$num2," es ", $result,"<br>";
      echo "Multiplicacion<br>";
      $result = $num1 * $num2;
      echo "La multiplicacion de los numeros ",$num1," y ",$num2," es ", $result,"<br>";
      echo "Division<br>";
      $result = $num1/$num2;
      echo "La division de los numeros ",$num1," y ",$num2," es ", $result,"<br>";
      echo "<br>";
      echo "Teorema de Pitagoras <br>";
      $a;
      $b;
      $c = pow($a,2) + pow($b,2);
      $c = pow($c,2);
      echo "El resultado de ",$a," y ",$b," ,C es ",$c;
      echo "<br>";
      echo "<br>";
      echo "Formula General <br>";
      //sqrt(n) es para sacar raiz;
      echo "El valor de A es ",$a2,"<br>";
      echo "El valor de B es ",$b2,"<br>";
      echo "El valor de C es ",$c2,"<br>";
      $v1 = -$b2;
      $v2 =$b2*$b2-4*$a2*$c2;
      $v3 = sqrt($v2);
      $x1 = $v1 + $v3;
      $x1 = $x1/2*$a2;
      echo "El valor de X1 es ",$x1,"<br>";

      $x2 = $v1 - $v3;
      $x2 = $x2/2*$a2;
      echo "El valor de X2 es ",$x2,"<br>";
      echo "No se puede sacar raiz a numeros negativos por lo tanto el valor es NAN<br>";
      echo "<br>";
      echo "Lista de numeros <br>";

      if ($n <= 50) {
        for ($i = 1; $i <= $n; $i++) {
          for ($j = 1; $j <= $i; $j++) {
           echo $i,"<br>";
          }
        }
      }else{
        echo "El limite de la lista de numeros es 50";
      }
      echo "<br>";
    echo "Tablas <br>";
    */
