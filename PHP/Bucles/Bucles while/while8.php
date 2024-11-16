<?php

/*
Mostrar la tirada de dados al azar y el valor máximo obtenido.
Este programa tira entre 1 y 10 dados al azar, muestra los resultados y 
determina el valor máximo obtenido en la tirada.
*/

// Inicializamos las variables
$i = 0;
$fijo = rand(1, 10); // Número aleatorio entre 1 y 10 para determinar cuántos dados tirar
$max = 0; // Variable para almacenar el valor máximo obtenido

// Bucle para tirar los dados
while ($i < $fijo) {
    $dado = rand(1, 6); // Genera un número aleatorio entre 1 y 6 (resultado de un dado)

    // Mostrar la imagen del dado
    echo "<img src='./img/dado$dado.png'>";

    // Actualizamos el valor máximo si el dado actual es mayor que el máximo
    if ($dado > $max) {
        $max = $dado;
    }

    $i++; // Incrementamos el contador
}

// Mostrar el resultado máximo
echo "<br>El dado más grande es: $max<br>";

/*
Mostrar la tirada de dados al azar y el valor mínimo obtenido.
Este programa tira entre 1 y 10 dados al azar, muestra los resultados y 
determina el valor mínimo obtenido en la tirada.
*/

// Inicializamos las variables para el cálculo del valor mínimo
$i = 0;
$min = 6; // El valor mínimo de un dado es 1, pero inicializamos en 6 para comparar correctamente

// Bucle para tirar los dados
while ($i < $fijo) {
    $dado = rand(1, 6); // Genera un número aleatorio entre 1 y 6 (resultado de un dado)

    // Mostrar la imagen del dado
    echo "<img src='./img/dado$dado.png'>";

    // Actualizamos el valor mínimo si el dado actual es menor que el mínimo
    if ($dado < $min) {
        $min = $dado;
    }

    $i++; // Incrementamos el contador
}

// Mostrar el resultado mínimo
echo "<br>El dado más pequeño es: $min";

?>
