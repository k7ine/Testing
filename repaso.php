<?php

// Escribe un script que simule el comportamiento de 
// lanzar una moneda al aire y muestre una imagen con 
// la cara o la cruz de la moneda

// Arreglo con las dos opciones
$variantes = ['cara', 'cruz'];

// Elegir aleatoriamente una opción
$vari = $variantes[array_rand($variantes)]; // Para seleccionar un aleatorio de un array: array_rand($variable_array)

// Mostrar la imagen correspondiente
echo "
    <p>La moneda ha caído en: <strong>$vari</strong></p>
    <img src='./img/$vari.jpg' alt='$vari' style='width:300px;height:auto;' />
";

?>
