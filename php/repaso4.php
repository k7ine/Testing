<?php

/*
Escribe un script PHP que realice la simulación de lanzar dos dados 
y muestre una imagen con los valores obtenidos en cada uno de los dados
*/

$dado1 = rand(1,6);
$dado2 = rand(1,6);

echo "El valor del dado 1 es: " . $dado1 . "<br>";

echo "<img src='./img/dado$dado1.png'>";

echo "<br>". "El valor del dado 2 es: " . $dado2 . "<br>";

echo "<img src='./img/dado$dado2.png'>";

?>