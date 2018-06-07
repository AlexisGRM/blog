<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$a;
	$b;
	$c; 
    $formas;
	$suma = ($a+$b);
	$resta = ($a-$b);
	$multi = ($a*$b);
	$div = ($a/$b);
	echo "<h1>Operaciones Aritmeticas</h1>";
	echo "Valor A: ".$a."</br>";
	echo "Valor B: ".$b."</br>"."</br>";
	echo "Suma: ".$suma."</br>";
	echo "Resta: ".$resta."</br>";
	echo "Multiplicacion: ".$multi."</br>";
	echo "Division: ".$div."</br>"."</br>";

	
	
	$valorC = ($a*$a)+($b*$b);
	$result = sqrt($valorC);
	echo "<h1>Teorema de Pitagoras</h1></br>";
	echo "Cateto A: ".$a."</br>";
	echo "Cateto B: ".$b."</br>";
	echo "Resultado Hipotenusa: ".$result."</br>"."</br>";

	
	$n = -1;

	$paso1 = sqrt(pow($b,2)-(4*($a*$c)));
	$paso2 = 2*$a;
	$paso3 = (($n*$b)+$paso1)/$paso2;
	$paso4 = (($n*$b)-$paso1)/$paso2;

	echo "<h1>Formula general</h1></br>";
	echo "resultado X1: ".$paso3."</br>";
	echo "resultado X2: ".$paso4."</br>"."</br>";


	echo "<h1>Numeros Continuos</h1>";
	$nums;
	if ($a<51) {
	for ($i=1; $i < $a+1; $i++) {

		for ($e=1; $e < $i+1; $e++) { 
		 	echo $i.",";
		 } 
	}
}else{
	echo "No se acepta numeros mayor a 50"."</br>"."</br>";
} 
    
      //Tabla de suma   
     
     
        $cont=0; 
        echo "<h1>Tabla de Suma</h1>";
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
    echo "<h1>Tabla de Multiplicar</h1>";
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



echo "<h1>Binomio al cuadrado</h1>";
    $binomio = (pow($a,2) + pow($b,2) + (($a*$b)*2));
    echo "Resultado: ".$binomio;

echo "<h1>Binomio al cubo</h1>";
    $binomio2 = (pow($a,3) + pow($b,3) + ((pow($a,2)*$b)*3) + ((pow($b,2)*$a)*3));
    echo "Resultado: ".$binomio2;

echo "<h1>Volumen de Figuras</h1>";


switch ($formas) {
    case 1:
        
        echo "Cubo";
        break;
    case 2:
        echo "Prisma Rectangular";
        break;
    case 3:
        echo "Piramide";
        break;
    case 4:
        echo "Esfera";
        break;
    case 5:
        echo "Cono";
        break;
}


	?>


	
</body>
</html>