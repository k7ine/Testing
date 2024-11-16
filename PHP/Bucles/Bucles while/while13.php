<?php

/*
Se desea mostrar la paleta de colores del color rojo, por ello, se irán dando valores 
de 0 hasta 255 a la propiedad RGB e incrementando 50 valores cada vez.
*/

// Inicializamos el valor de color en 0
$color = 0;

while ($color <= 255) {
    
    // Generar el código RGB usando el valor actual de $color para el canal rojo
    $rgbColor = "rgb($color, 0, 0)";  // Cambié el verde y azul a 0 para centrar la paleta en el rojo

    // Mostrar cada color en un div
    echo "<div style='border: 1px solid black; padding: 10px; background-color: $rgbColor;'>
            <p style='color: white;'>$rgbColor</p>
          </div>";

    // Incrementar el valor del rojo en 50
    $color += 50;
}

?>
