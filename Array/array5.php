<?php

// Crea un array que genere números aleatorios llamado 'num' y luego en otro bucle los muestre en orden inverso por pantalla.

$num = []; // Definimos el array que por ahora está vacío

// Generamos 10 números aleatorios y los añadimos al array
for ($i = 0; $i < 10; $i++) { 
    $num[] = rand(1, 10); // Generamos un número aleatorio entre 1 y 10 y lo añadimos al array
}

$invertir = []; // Creamos un nuevo array para almacenar los elementos en orden inverso

for ($i = count($num) - 1; $i >= 0; $i--) {
    $invertir[] = $num[$i];  // Añadimos los elementos al nuevo array en orden inverso
}
echo "<br>";

// Usamos print_r para mostrar el array original (en el orden en que se generó)
print_r($num);
echo "<br>";
// Usamos print_r para mostrar el array invertido
print_r($invertir);

?>

