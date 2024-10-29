<?php

/*
Juego de adivinanza:

Crea un programa que seleccione un número aleatorio entre 1 y 10. 
Usa un bucle while para permitir al usuario adivinar el número. 
Si el número es correcto, termina el bucle y muestra un mensaje de éxito. 
Si el número es incorrecto, usa una sentencia if para informar al usuario 
si el número que eligió es mayor o menor que el número correcto. 
*/

$i = 0;
$aleatorio = rand(1, 10);
$numuser = 7;

echo "¡Adivina el número entre 1 y 10!" . "<br>";
echo "El del usuario: " . $numuser . "<br>";
echo "El aleatorio: " . $aleatorio . "<br>";

while ($i <= 0) {
    
    if ($numuser == $aleatorio) {
        echo "Ganaste!" . "<br>";
    } if ($numuser > $aleatorio) {
        echo "El número que buscas es menor." . "<br>";
    } if ($numuser < $aleatorio) {
        echo "El número que buscas es mayor." . "<br>";
    } 
    
    $i = $i + 1;

}

?>