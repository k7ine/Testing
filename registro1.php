<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operador = $_POST['menu'];
    
    $resultado = 0; // Inicializamos la variable resultado

    // Realizar la operación seleccionada
    switch ($operador) {
        case "+":
            $resultado = $num1 + $num2;
            break;
        case "-":
            $resultado = $num1 - $num2;
            break;
        case "*":
            $resultado = $num1 * $num2;
            break;
        case "/":
            // Verificamos que no se divida por cero
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
            } else {
                echo "Error: División por cero no es permitida.";
                exit; // Salimos del script si hay un error
            }
            break;
        default:
            echo "Operación no válida.";
            exit;
    }

    // Mostrar el resultado
    echo "<h1>Resultado:</h1>";
    echo "<p>$num1 $operador $num2 = $resultado</p>";
}
?>


