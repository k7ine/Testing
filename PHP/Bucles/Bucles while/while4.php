<?php

/*
Mostrar los números pares de 0 a 100
Este programa utiliza un bucle while para mostrar todos los números pares entre 0 y 100.
*/

// Inicializamos la variable en 0, ya que es el primer número par
$i = 0;

// Usamos un bucle while para recorrer los números pares
while ($i <= 100) {
    echo "$i<br>"; // Mostramos el número seguido de un salto de línea
    $i = $i + 2; // Incrementamos $i en 2 para pasar al siguiente número par
}

?>
