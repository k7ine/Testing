<?php

/*
Generar una tabla de multiplicar
Escribe un programa que solicite al usuario un número y use un bucle 
while para generar la tabla de multiplicar de ese número, desde el 1 hasta el 10.
*/

$i = 0;
$multi = rand (1,10);

while ($i <= 10) {
    
    echo "$multi X $i =" . $multi * $i . "<br>"; 

    $i = $i + 1;

}



?>