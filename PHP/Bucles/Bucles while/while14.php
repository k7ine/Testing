<?php

// Mostrar los números impares desde 50 hasta 1

// Inicializa la variable $i en 50
$i = 50;

while ($i >= 1) {

    // Verificar si $i es impar
    if ($i % 2 == 1) {
        echo $i . "<br>";  // Muestra el valor de $i si es impar
    }

    $i--;  // Decrementa $i en 1
}

?>
