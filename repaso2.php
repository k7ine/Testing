<?php

/*
Escribe un script PHP que realice la simulación de lanzar un 
dado y muestre una imagen con un valor aleatorio entre 1 y 6. 
Resuelva el ejercicio utilizando la estructura de control if-else
*/

$dado = rand(1,6);

echo "El número del dado es: $dado <br><br>";

if ($dado == 1) {
    echo "<img src='./img/dado1.png'>";
} 

elseif  ($dado == 2) {
    echo "<img src='./img/dado2.png'>";
} 

elseif  ($dado == 3) {
    echo "<img src='./img/dado3.png'>";
}

elseif  ($dado == 4) {
    echo "<img src='./img/dado4.png'>";
}

elseif  ($dado == 5) {
    echo "<img src='./img/dado5.png'>";
}

elseif  ($dado == 6) {
    echo "<img src='./img/dado6.png'>";
}

?>