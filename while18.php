<?php

/*
Suma de números hasta que sea mayor a un valor:
Crea un programa que sume números consecutivos comenzando desde 1. 
Utiliza un bucle while y una sentencia if para detener 
la ejecución cuando la suma acumulada sea mayor a 100.
*/

$i = 1;
$suma = 0;

while ($i > 0) {

    $suma += $i;

    if ($suma >= 100) {
        break;  
    }

    echo "Número actual: $i, Suma acumulada: $suma" . "<br>";

    $i++;
}

?>
