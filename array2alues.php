<?php

// Crear un array de 100 elementos que contenga valores aleatorios 

$valor = [];

// Bucle para crear las 100 posiciones del array con un número aleatorio entre 1 y 10
for ($i=0; $i < 100; $i++) { 
    // Almacena el valor rand(1,10) en el array
    $valor[]=rand(1,10);

}

// Muestra el array
print_r($valor);

// Para sacar el valor máximo y mínimo del array
for ($i=0; $i < 100; $i++) { 
    if ($valor < $minimo) {
        $minimo = $valor;
    } if ($valor > $maximo) {
        $maximo = $valor;
    }
}




print_r($valor);

?>