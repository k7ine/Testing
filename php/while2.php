<?php

/*
Suma de números pares del 1 al 20
Utiliza un bucle while para calcular la suma de todos los números pares 
entre 1 y 20, y muestra el resultado final.
*/

$i = 2;
$suma = 0;

while ($i <= 20) {
    
    $suma += $i;

    $i = $i + 2;

}

echo "La suma de todos los números pares del 1 al 20 es: $suma";

?>