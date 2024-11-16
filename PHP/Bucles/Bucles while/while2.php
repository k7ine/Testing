<?php

/*
Suma de números pares del 1 al 20
Utiliza un bucle while para calcular la suma de todos los números pares 
entre 1 y 20, y muestra el resultado final.
*/

// Inicializamos las variables
$i = 2; // Primer número par
$suma = 0; // Acumulador para la suma

// Bucle while para recorrer los números pares
while ($i <= 20) {
    $suma += $i; // Sumamos el valor actual de $i
    $i = $i + 2 // Incrementamos $i en 2 para pasar al siguiente número par
}

// Mostramos el resultado final
echo "La suma de todos los números pares del 1 al 20 es: $suma";

?>
