<?php

// Crear un array de 100 elementos que tengan valores aleatorios,  debe mostrarse su valor máximo, el mínimo y la media.

$array =[];
// Inicializamos las variables de máximo y mínimo
$maximo = 0;
$minimo = 0;

//Bucle para completar el array con los números aleatorios
for ($i=0; $i < 100; $i++) { 
    
    $array[]=rand(1,100);

}

// Si el elemento actual es menor que el mínimo actual, lo actualizamos
if ($array[$i] < $minimo) {
    $minimo = $array[$i];
} 

// Si el elemento actual es mayor que el máximo actual, lo actualizamos
if ($array[$i] > $maximo) {
    $maximo = $array[$i];
}

// Para calcular la media
$media = array_sum($array)/count($array);
// array_sum (suma todos los valores del array) / count (cuenta todos los valores que hay dentro del array)

print_r($array);

$max = max($array);
$min = min($array);

echo "<br>";

echo "El valor más grande del array es: " . $max;

echo "<br>";

echo "El valor más pequeño del array es: " . $min;

echo "<br>";

echo "La media del array es: " . $media;

?>