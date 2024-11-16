<?php

/*
Tabla de multiplicar de un número
Este programa calcula y muestra la tabla de multiplicar de un número aleatorio entre 1 y 10.
*/

// Generamos un número aleatorio entre 1 y 10
$numero = rand(1, 10);

// Inicializamos la variable para el contador
$i = 0;

echo "Tabla de multiplicar del número $numero:<br><br>";

// Usamos un bucle while para generar la tabla de multiplicar
while ($i <= 10) {
    
    echo "$numero * $i = " .  $numero * $i . "<br>";

    $i = $i + 1;

}

?>