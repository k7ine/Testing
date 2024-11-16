<?php

/*
Factorial de un número
Escribe un programa que, dado un número introducido por el usuario, calcule su factorial usando un bucle while. 
(Ejemplo: El factorial de 5 es 5 * 4 * 3 * 2 * 1 = 120).
*/

// Pedimos al usuario que introduzca un número
$numero = 5; // Puedes reemplazarlo con un valor solicitado al usuario, por ejemplo con un formulario o CLI

// Inicializamos variables
$factorial = 1; // El factorial de cualquier número incluye el producto por 1
$i = $numero; // Partimos desde el número ingresado por el usuario

// Usamos un bucle while para calcular el factorial
while ($i > 0) {
    $factorial *= $i; // Multiplicamos el valor actual de $factorial por $i
    $i--; // Reducimos $i en 1
}

// Mostramos el resultado
echo "El factorial de $numero es: $factorial";

?>
