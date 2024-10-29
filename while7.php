<?php

/*
Hacer un script PHP que sume los primeros 20 números y muestre el resultado. (1+2+3+4….)
*/

$i = 1;
$suma = 0; // Variable para almacenar la suma

while ($i <= 20) {

    $suma += $i; // Sumar el valor actual de $i a la variable $suma
    
    $i = $i + 1;
}

echo "La suma de los 20 primeros números es: $suma";

?>