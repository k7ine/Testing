<?php

$elemento_1 = rand (1,3); // Elemento 1 = Piedra, Elemento 2 = Papel, Elemento 3 = Tijera

$elemento_2 = rand (1,3); // Elemento 1 = Piedra, Elemento 2 = Papel, Elemento 3 = Tijera

$opciones = ["1" => "Piedra", "2" => "Papel", "3" => "Tijera"];

// Enfrentamientos
echo $opciones[$elemento_1] . " vs " . $opciones[$elemento_2] . "<br>";

// Determinar el ganador usando if

if ($elemento_1 == $elemento_2) {
    echo "Empate";
} elseif  (($elemento_1 == 1 && $elemento_2 == 3) || // Piedra vence a tijera
            ($elemento_1 == 2 && $elemento_2 == 1) || // Papel vence a piedra
            ($elemento_1 == 3 && $elemento_2 == 2))   // Tijera vence a papel
    echo "<p>Rival 1 gana</p>";
else {
    echo "<p>Rival 2 gana</p>";
}

?>