<?php

/*
Escriba un programa que cada vez que se ejecute 
muestre la tirada de entre 1 y 10 dados al azar 
y diga el valor máximo obtenido.
*/

$i = 0;
$fijo = rand (1,9);
$max = 0;

while ($i <= $fijo) {
    $dado = rand (1,6);

    echo "<img src='./img/dado$dado.png'>";
    
    if ($dado > $max) {
        $max = $dado;
    }

    $i = $i + 1;

}

echo "El dado mas grande es: $max";

/*
Escriba un programa que cada vez que se ejecute 
muestre la tirada de entre 1 y 10 dados al azar 
y diga el valor mínimo obtenido.
*/

$i = 0;
$fijo = rand (1,9);
$min = 6;

while ($i <= $fijo) {
    $dado = rand (1,6);

    echo "<img src='./img/dado$dado.png'>";
    
    if ($dado < $min) {
        $min = $dado;
    }

    $i = $i + 1;

}

echo "El dado mas pequeño es: $min";

?>