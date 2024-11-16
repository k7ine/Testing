<?php

/*
Generar una tabla de multiplicar
Este programa solicita un número al usuario y genera la tabla de multiplicar de ese número,
desde el 1 hasta el 10.
*/

// Solicitar al usuario que ingrese un número
$numero = (int)readline("Introduce un número para generar su tabla de multiplicar: ");

// Inicializar el contador
$i = 1;

// Usar un bucle while para generar la tabla de multiplicar
while ($i <= 10) {
    echo "$numero X $i = " . ($numero * $i) . "<br>";
    $i++; // Incrementar $i en cada iteración
}

?>
