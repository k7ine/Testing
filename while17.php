<?php

/*
Cálculo de números pares:
Escribe un script que imprima los primeros 50 números. 
Utiliza un bucle while y dentro del bucle usa una sentencia if para verificar si el número es par. 
Si es par, imprímelo.
*/

$i = 0;

while ($i <= 50) {
    
    if ($i % 2 == 0) {
        echo "El número $i es par." . "<br>";
    } else {
        echo "El número $i es impar." . "<br>";
    }

    $i = $i + 1;

}

?>