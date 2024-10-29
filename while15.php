<?php

/*
Hacer un script PHP haga una tabla de 20 filas y 20 columnas en código HTML. 
Hacer un script en PHP con el siguiente resultado. (dos bucles)
   * * * * *

   * * * * *

   * * * * *

   * * * * *
*/

$i = 0;

echo '<table border="0">';

while ($i <= 3) {
    $a = 0;

    echo '<tr>';
    
        while ($a <= 3) {
            echo '<td>*</td>';
            $a = $a + 1;
        }
    
    '</tr>';

    $i = $i + 1;

}

echo '</table>';

?>

