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
    
    $siguiente_numero = $numero1 + $numero2;

    if ($siguiente_numero % 2 == 0) {
        echo "Número par de Fibonacci: $siguiente_numero<br>";
    }

    // Actualizamos los números para la próxima iteración
    $numero1 = $numero2;
    $numero2 = $siguiente_numero;
    $i = $i + 1;

    $i = $i + 1;

}

// Mostramos el primer número de la secuencia, que es 0 (también par)
if ($numero1 % 2 == 0) {
    echo "Número par de Fibonacci: $numero1<br>";
}

?>