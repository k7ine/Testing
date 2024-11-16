<?php

/*
Juego de adivinanza:

Crea un programa que seleccione un número aleatorio entre 1 y 10. 
Usa un bucle while para permitir al usuario adivinar el número. 
Si el número es correcto, termina el bucle y muestra un mensaje de éxito. 
Si el número es incorrecto, usa una sentencia if para informar al usuario 
si el número que eligió es mayor o menor que el número correcto.
*/

// Generar un número aleatorio entre 1 y 10
$aleatorio = rand(1, 10);

// Iniciar el número del usuario como 0 (o cualquier valor inicial)
$numuser = 0;

echo "¡Adivina el número entre 1 y 10!" . "<br>";

// Bucle mientras el usuario no haya adivinado el número
while ($numuser != $aleatorio) {
    
    // Aquí debes permitir al usuario ingresar un número.
    // Como no estamos usando formularios en este ejemplo, estableceremos un valor fijo para la demostración.
    // En una aplicación real, deberías usar un formulario o una entrada por consola.
    $numuser = rand(1, 10);  // Simula una adivinanza por el usuario, puedes sustituirlo con la entrada real.

    echo "Tu adivinanza: $numuser <br>";
    
    // Comprobar si el número es correcto
    if ($numuser == $aleatorio) {
        echo "¡Ganaste! El número era $aleatorio." . "<br>";
    } elseif ($numuser > $aleatorio) {
        echo "El número que buscas es menor." . "<br>";
    } else {
        echo "El número que buscas es mayor." . "<br>";
    }

}

?>
