<?php

/*
Números impares hasta un valor dado
Crea un programa que pida al usuario un número entero positivo y 
use un bucle while para imprimir todos los números impares desde el 1 hasta el número dado.
*/

$i = 1;
$num = rand (1, 35);

while ($i <= $num) {

    echo $i . "<br>";

    $i = $i + 2;
}


?>

