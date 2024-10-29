<?php

/*
Escribe un script PHP que genere un número aleatorio
entre 1 y 7, y muestre un mensaje indicando a qué 
día de la semana corresponde.
*/

$num = rand(1,7);

echo $num;

switch ($num) {
    case '1':
        echo " - Lunes";
        break;

    case '2':
        echo " - Martes";
        break;

    case '3':
        echo " - Miercoles";
        break;

    case '4':
        echo " - Jueves";
        break;

    case '5':
        echo " - Viernes";
        break;

    case '6':
        echo " - Sabado";
        break;
    
    case '7':
        echo " - Domingo";
        break;
}

?>