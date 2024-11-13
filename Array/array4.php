<?php

// Crear un array de 100 elementos que tengan valores aleatorios,  debe mostrarse su valor máximo, el mínimo y la media.

$array =[];
$maximo = 0;
$minimo = 0;

for ($i=0; $i < 100; $i++) { 
    
    $array[]=rand(1,100);

}

if ($array[$i] < $minimo) {
    $minimo = $array[$i];
} if ($array[$i] > $maximo) {
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