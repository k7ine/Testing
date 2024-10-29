<?php

//Se desea mostrar la paleta de colores del color rojo, por ello, se irán dando valores de 0 hasta 255 a 
// la propiedad RGB e incrementando 50 valores cada vez.


$i = 0;
$b = 50;
while ($i <= 255) {

    echo "<div style='background-color: rgb($i, $b, 0); width: $b; padding: 20px; border: 1px solid teal;'></div>";

    $i = $i + 1; // Incrementa $i en 1
    $b = $b + 5;
}


?>