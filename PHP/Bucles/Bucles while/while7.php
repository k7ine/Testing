<?php

/*
Suma de los primeros 20 números
Este script calcula la suma de los números del 1 al 20 y muestra el resultado.
*/

// Inicializamos las variables
$i = 1; // Contador que comienza en 1
$suma = 0; // Acumulador para la suma

// Usamos un bucle while para realizar la suma
while ($i <= 20) {

    $suma += $i; // Sumar el valor actual de $i a la variable $suma
    
    $i = $i + 1;
}

// Mostramos el resultado final
echo "La suma de los 20 primeros números es: $suma";

?>