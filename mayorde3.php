<?php

/*
Realiza un programa que calcule el mayor de tres números.
*/

$num1 = rand (1, 100);
$num2 = rand (1, 100);
$num3 = rand (1, 100);

echo "Los números son: $num1, $num2, $num3" . "<br>";

if ($num1 > $num2 && $num1 > $num3) {
    echo "El mayor es: " . $num1;
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "El mayor es: " . $num2;
} elseif ($num3 >= $num2 && $num3 >= $num1) {
    echo "El mayor es: " . $num3;
}

?>