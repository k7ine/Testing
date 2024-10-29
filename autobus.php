<?php

/*
11. El director de una escuela está organizando un viaje de estudios y 
requiere determinar cuánto debe cobrar a cada alumno y cuánto debe pagar 
a la compañía de viajes por el servicio. 
La forma de cobrar es la siguiente:
* Si son 100 alumnos o más, el costo por cada alumno es de 65 euros.
* De 50 a 99 alumnos, el costo es de 70 euros.
* De 30 a 49 alumnos, el costo es de 95 euros.
* Menos de 30 alumnos, el costo de la renta del autobús es de 4000 euros, sin importar el número de alumnos. 
*/

$alumnos = rand (0, 170);

echo "El número de alumnos es: " . $alumnos . "<br>";

if ($alumnos >= 100) {
    echo "El precio por alumno: " . $coste = 65 . "<br>";
    echo "El precio a pagar a la agencia es: " . 65 * $alumnos . "<br>";
} else {
    if ($alumnos >= 50 && $alumnos <= 99) {
        echo "El precio por alumno: " . $coste = 70 . "<br>";
        echo "El precio a pagar a la agencia es: " . 70 * $alumnos . "<br>";
    } if ($alumnos >= 30 && $alumnos <= 49) {
        echo "El precio por alumno: " . $coste = 95 . "<br>";
        echo "El precio a pagar a la agencia es: " . 95 * $alumnos . "<br>";

    } 
}
if ($alumnos <= 30) {
    echo "El precio por alumno: " . $coste = 4000 . "<br>";
}


?>