<?php

$tiempo = rand (1, 15); // De 1 a 15 minutos la duración de la llamada
$dia = rand (1, 7); // Día de la semana
$hora = rand (1, 24); // Hora del día


if ($tiempo >= 1 && $tiempo <= 5) {
    echo "El tiempo es: " . $tiempo;
    echo "Y el coste: ";
    echo $coste = 1;
} 

elseif ($tiempo >= 6 && $tiempo <= 8) {
    echo "El tiempo es: " . $tiempo;
    echo "Y el coste: ";
    echo $coste = 1 + 0.80;
} 

elseif ($tiempo >= 9 && $tiempo <= 10) {
    echo "El tiempo es: " . $tiempo;
    echo "Y el coste: ";
    echo $coste = 1 + 0.80 + 0.70;
} 

elseif ($tiempo >= 11) {
    echo "El tiempo es: " . $tiempo;
    echo "Y el coste: ";
    echo $coste = 1 + 0.80 + 0.70 + 0.50;
}

// Calcular el impuesto

if ($dia == 7){
    $impuesto = $coste * 0.3;
}    if ($hora == 1) {
    $impuesto = $coste * 0.15; //turno mañana
} else {
    $impuesto = $coste * 0.10; //turno tarde/noche
}

echo "la duración de la llamada es $tiempo, el día $dia, el horario de $hora y el coste es " . ($coste + $impuesto);




?>