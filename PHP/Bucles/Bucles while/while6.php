<?php

/*
Muestra los números del 10 al 1
Este programa utiliza un bucle while para mostrar los números desde el 10 hasta el 1 en orden descendente.
*/

// Inicializamos la variable en 10
$i = 10;

// Usamos un bucle while para recorrer los números del 10 al 1
while ($i >= 1) {
    echo "$i<br>"; // Mostramos el valor actual de $i seguido de un salto de línea
    $i--; // Decrementamos $i en 1
}

?>