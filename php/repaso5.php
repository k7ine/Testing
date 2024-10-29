<?php

/*
Se desea realizar un programa que en 
función de una temperatura muestre un 
mensaje y la temperatura. Si está entre 0 y 10
grados muestre "hace frio", por encima de 10 y 20 
muestre "hace fresquito", entre 20 y 30 
muestre "se está bien", cuando sea mayor de 30 
y menor de 0 grados muestre "es insoportable".
*/

$temp = rand(-10, 40);

echo "La temperatura es: " . $temp . " ";

if ($temp >= 0 && $temp <= 10) {
    echo "Hace frio";
} elseif ($temp >= 11 && $temp <= 20) {
    echo "Hace freskito";
} elseif ($temp >= 21 && $temp <= 30) {
    echo "Se está bien";
} elseif ($temp <= 0 || $temp >= 30) {
    echo "Es insoportable";
}

?>