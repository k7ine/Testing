<?php

/*
Suma de números hasta que sea mayor a un valor:
Crea un programa que sume números consecutivos comenzando desde 1. 
Utiliza un bucle while y una sentencia if para detener 
la ejecución cuando la suma acumulada sea mayor a 100.
*/

$i = 1; // Inicializa el contador en 1
$suma = 0; // Inicializa la suma acumulada en 0

while ($i > 0) {

    $suma += $i; // Suma el valor de $i a la suma acumulada

    // Si la suma acumulada es mayor o igual a 100, detiene el bucle
    if ($suma >= 100) {
        break; // Sale del bucle si la suma alcanza o supera 100
    }

    // Muestra el número actual y la suma acumulada en cada iteración
    echo "Número actual: $i, Suma acumulada: $suma" . "<br>";

    $i++; // Incrementa el contador en cada iteración
}

?>

