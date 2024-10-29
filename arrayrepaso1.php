<?php

$frutas = ["manzana", "naranja", "plátano", "pera"];

echo $frutas[rand(0,2)] . "<br><br>"; // Salida aleatoria de la fruta correspondiente en la posición [x]

// Para recorrer el array:
for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . "<br>";
}

// Para contar el contenido del array:
echo count($frutas); // Salida: 4

// Ordena los elementos de un array numérico o alfabético (orden ascendente).
sort($frutas);


echo "<br><br>";

$persona = ["Pablo", "Julio", "Pepe", "Carlos"];

// Para mostrar todo el array: Array ( [0] => Pablo [1] => Julio [2] => Pepe [3] => Carlos )
print_r($persona);

?>