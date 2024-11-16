<?php

// Mostrar la división de un número aleatorio (entre 1 y 10)

// Inicialización de la variable i en 1
$i = 1;

// Generar un número aleatorio entre 1 y 10
$multi = rand(1, 10);

while ($i <= 10) {

    // Mostrar la división del número aleatorio por el valor de $i
    echo "$multi / $i = " . $multi / $i . '<br>';

    // Incrementar el valor de $i en cada iteración
    $i = $i + 1; // Contador

}

?>