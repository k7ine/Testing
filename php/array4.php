<?php

/*
Productos y precios: Crea un array asociativo en el que cada clave sea 
el nombre de un producto y su valor sea el precio 
(por ejemplo, ["Manzana" => 1.2, "Pan" => 0.85]). 
Luego, muestra el producto más caro y el más barato.
*/

$productos = [
    "Manzana" => 1.2, 
    "Pan" => 0.85, 
    "Red Bull" => 2.30, 
    "Monster" => 2.0, 
    "CocaCola" => 1.20
];

// Inicializamos las variables para el producto más caro y más barato
$caro = null;
$barato = null;
$productoCaro = '';
$productoBarato = '';

// Recorremos el array para encontrar el más caro y el más barato
foreach ($productos as $producto => $precio) {
    if ($caro === null || $precio > $caro) { // El operador === en PHP es un operador de comparación estricta.
        $caro = $precio;
        $productoCaro = $producto;
    }

    if ($barato === null || $precio < $barato) {
        $barato = $precio;
        $productoBarato = $producto;
    }
}

// Mostramos los resultados
echo "El producto más caro es: $productoCaro con un precio de $caro<br>";
echo "El producto más barato es: $productoBarato con un precio de $barato<br>";

print_r($productos);

?>