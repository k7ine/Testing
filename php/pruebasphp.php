<?php

/*
11. El director de una escuela está organizando un viaje de estudios
y requiere determinar cuánto debe cobrar a cada alumno y cuánto debe 
pagar a la compañía de viajes por el servicio. La forma de cobrar es la siguiente:
* Si son 100 alumnos o más, el costo por cada alumno es de 65 euros.
* De 50 a 99 alumnos, el costo es de 70 euros.
* De 30 a 49 alumnos, el costo es de 95 euros.
* Menos de 30 alumnos, el costo de la renta del autobús es de 4000 euros, 
  sin importar el número de alumnos. 
Realiza un algoritmo que permita determinar el pago a la compañía de autobuses 
y lo que debe pagar cada alumno por el viaje.
*/

$alumnos = rand(1, 135);


echo "El número de alumnos que asistirá al viaje es: " . $alumnos . "<br>";

if ($alumnos >= 100) {
    echo "El coste por alumno es de 65€" . "<br>"; 
    echo "El coste total es: " . $alumnos*65 . "€" . "<br>";
} if ($alumnos <= 99 && $alumnos >= 50) {
    echo "El coste por alumno es de 70€" . "<br>";
    echo "El coste total es: " . $alumnos*70 . "€" . "<br>";
} if ($alumnos <= 49 && $alumnos >= 30) {
    echo "El coste por alumno es de 95€" . "<br>";
    echo "El coste total es: " . $alumnos*95 . "€" . "<br>";
} if ($alumnos <= 29) {
    echo "El coste total es: " . 4000 / $alumnos . "€";
} 

?>