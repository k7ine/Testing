<?php

/*
 3. Calcula la tabla de multiplicar de un número hasta el 10, por ejemplo; 2x1=2, 2x2=4...
*/

$i = 0;
$numero = rand (1, 10);

while ($i <= 10) {
    
    echo "$numero * $i = " .  $numero * $i . "<br>";

    $i = $i + 1;

}

?>