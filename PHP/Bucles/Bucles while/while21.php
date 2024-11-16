<?php

/*
Secuencia Fibonacci:
Crea un programa que imprima los primeros 10 números de la secuencia Fibonacci. 
Usa un bucle while y dentro del bucle, 
una sentencia if que imprima solo los números pares de la secuencia.
*/

// Inicializamos las variables para la secuencia de Fibonacci
$numero1 = 0;
$numero2 = 1;
$i = 0;

while ($i < 10) {
    
    // Calculamos el siguiente número de la secuencia
    $siguiente_numero = $numero1 + $numero2;

    // Imprimimos solo los números pares
    if ($siguiente_numero % 2 == 0) {
        echo "Número par de Fibonacci: $siguiente_numero<br>";
    }

    // Actualizamos los números para la próxima iteración
    $numero1 = $numero2;
    $numero2 = $siguiente_numero;
    
    $i++; // Incrementamos el contador para la cantidad de números a mostrar
}

?>
