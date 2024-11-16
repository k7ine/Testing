<?php

/*
Números impares hasta un valor dado
Este programa solicita un número entero positivo al usuario y luego utiliza un bucle while para 
imprimir todos los números impares desde el 1 hasta el número dado.
*/

// Solicitar al usuario un número entero positivo
$num = (int)readline("Introduce un número entero positivo: ");

// Comprobar si el número es positivo
if ($num > 0) {
    $i = 1; // Inicializamos $i en 1 para empezar con el primer número impar

    // Bucle while para imprimir los números impares
    while ($i <= $num) {
        echo $i . "<br>"; // Mostrar el número impar
        $i += 2; // Incrementar de 2 en 2 para obtener el siguiente número impar
    }
} else {
    echo "Por favor, ingresa un número entero positivo.";
}

?>


