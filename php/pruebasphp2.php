<?php
/*
12. La política de cobro de una compañía telefónica es: cuando se realiza una llamada, 
el cobro es por el tiempo que ésta dura, de tal forma que :
 * los primeros cinco minutos cuestan 1 euro,
 * los siguientes tres, 80 céntimos, 
 * los siguientes dos minutos, 70 céntimos, 
* y a partir del décimo minuto, 50 céntimos. 
Además, se carga un impuesto de 3 % cuando es domingo, 
y si es otro día, en turno de mañana, 15 %, y en turno de tarde/noche, 10 %. 
Realice un algoritmo para determinar cuánto debe pagar por 
cada concepto una persona que realiza una llamada.
*/

$tiempo = rand(1,15); // El tiempo en minutos que dura una llamada
$dia = rand(1,7); // El día de la semana para calcular el impuesto del día
$hora = rand(1,24);



// Cálculo según el tiempo de llamada

if ($tiempo >= 1 && $tiempo <= 5) {
    $coste = 1;
    echo "El coste de la llamada es de: " . $coste . "€" . "<br>";;
} if ($tiempo >= 6 && $tiempo <= 8) {
    $coste = 1 + 0.8;
    echo "El coste de la llamada es de: " . $coste . "€" . "<br>";;
} if ($tiempo >= 9 && $tiempo <= 10) {
    $coste = 1 + 0.8 + 0.7;
    echo "El coste de la llamada es de: " . $coste . "€" . "<br>";;
} if ($tiempo > 10) {
    $coste = 1 + 0.8 + 0.7 + 0.5;
    echo "El coste de la llamada es de: " . $coste . "€" . "<br>";
}

echo $coste . "€";

// Cálculo de impuestos

/*
Además, se carga un impuesto de 3 % cuando es domingo, 
y si es otro día, en turno de mañana, 15 %, y en turno de tarde/noche, 10 %. 
Realice un algoritmo para determinar cuánto debe pagar por 
cada concepto una persona que realiza una llamada.
*/

if ($dia == 7) {
    $impuesto = $coste * 0.03;
    $impuesto = $impuesto + $coste;
    echo $impuesto;
} if ($dia != 7 && $hora >= 1 && $hora <= 12) {
    echo "Impuesto de mañanas" . "<br>";
    echo "La hora es: " . $hora . "<br>";
    echo "Y el tiempo es: " . $tiempo . "<br>";
    echo "Y el coste: ";
    echo $coste = 1 * 1.15;
} if ($dia != 7 && $hora >= 13 && $hora <= 24) {
    echo "Impuesto de tardes". "<br>";
    echo "La hora es: " . $hora. "<br>";
    echo "El tiempo es: " . $tiempo. "<br>";
    echo "Y el coste: ";
    echo $coste = 1 * 1.10;
}
?>
