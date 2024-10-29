<?php

/*
Invertir array: Dado un array con las palabras de una frase 
(por ejemplo, ["Hola", "mundo", "PHP", "es", "genial"]), crea 
un nuevo array que contenga las palabras en orden inverso.
*/

$array =["Hola", "mundo", "PHP", "es", "genial"];
$inverso = [];

for ($i=count($array) - 1; $i > 0; $i--) { // count($array) - 1 como el valor inicial de $i para empezar desde el último índice
    
    $inverso[]=$array[$i]; // En cada iteración, añadimos $array[$i] a $inverso, lo que nos da los elementos en orden inverso.

}

print_r($inverso);

?>