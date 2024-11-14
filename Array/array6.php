<?php

/*
Dado un array definido que contiene las edades de los pacientes 
de un ambulatorio $edades=[20,19,6,30,63,5,10,40]  se desea 
almacenar en dos vectores (menores y mayores) aquellos que son 
mayores de edad y en otro aquellos que sean menores.
*/

$edades = [20,19,6,30,63,5,10,40]; // Representamos el array completo
$mayores = []; // Inicializamos el array mayores
$menores = []; // Inicializamos el array menores

for ($i=0; $i < count($edades); $i++) { // Creamos el bucle para poder recorrer y crear los dos casos (mayores y menores)
    
    if ($edades[$i] >= 18) { // Si la edad del array en la posición $i es mayor o igual que 18
        $mayores[]=$edades[$i]; // Se almancenará la posición $i en el array mayores
    }

    if ($edades[$i] < 18) { // Si la edad del array en la posición $i es menor que 18
        $menores[]=$edades [$i]; // Se almacenará la posición $i en el array menores
    }

}

// Mostramos por pantalla los resultados
echo "Las edades son: ";
print_r($edades);
echo "<br>";
echo "Las edades mayores son: ";
print_r($mayores);
echo "<br>";
echo "Las edades menores son: ";
print_r($menores);

?>

