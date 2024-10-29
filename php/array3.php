<?php

/*
Promedio de valores: Crea un array con 10 números enteros aleatorios. Calcula y muestra el promedio de estos números.
*/

$ale =[];

for ($i=0; $i < 10; $i++) { 
    
    $ale[$i]=rand(1,10);

}

$suma = array_sum($ale); // Suma todos los elementos del array y lo guarda en $suma
$promedio = $suma / count($ale); // Con $suma podemos dividirlo entre todos los elementos del array count($ale)

echo "El promedio del array es: " . $promedio . "<br>"; // Se muestra el promedio en $promedio



echo "<pre>"; 
print_r($ale);   // Muestra los números pares
echo "</pre><br>";

?>