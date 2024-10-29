<?php

/*
Números pares e impares: Crea un array que contenga números del 1 al 20. Luego, separa los 
números en dos arrays diferentes: uno para números pares y otro para impares.
*/

$num = [];
$par = [];
$impar = [];

// Llenamos el array con números del 1 al 20
for ($i = 0; $i < 20; $i++) { 
    $num[] = $i + 1;
}

// Separación de pares e impares
foreach ($num as $numero) { 
    if ($numero % 2 == 0) {
        $par[] = $numero;
    } else {
        $impar[] = $numero;
    }
}

// Impresión de resultados
echo "El array de los números pares: <pre>"; 
print_r($par);   // Muestra los números pares
echo "</pre><br>";

echo "El array de los números impares: <pre>"; 
print_r($impar); // Muestra los números impares
echo "</pre>";

?>
