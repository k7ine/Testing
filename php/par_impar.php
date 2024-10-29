<?php

$numero = rand (1, 100);

echo "El número es: " . $numero . "<br>";

if (($numero % 2) == 0) {
    echo "Es par";
} else {
    echo "Es impar";
}

?>