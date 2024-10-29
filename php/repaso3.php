<?php

/*
Escribe un script PHP que realice la simulación de lanzar un dado
y muestre una imagen con un valor aleatorio entre 1 y 6. 
Resuelva el ejercicio sin utilizar la estructuras de control if-else y switch.
*/

$dado = rand(1,6);

echo "El valor del dado es: " . $dado . "<br>";

echo "<img src='./img/dado$dado.png'>";

?>