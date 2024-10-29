<?php

/*
Control de intentos (Web) con botón de "Volver atrás":
Simula un sistema de login con tres intentos permitidos.
*/

session_start(); // Iniciamos una sesión para almacenar el número de intentos

// Contraseña correcta predefinida
$contraseña_correcta = "1234";

// Verificamos si la sesión ya tiene un contador de intentos
if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0; // Si no lo tiene, lo inicializamos a 0
}

// Si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contraseña_usuario = $_POST['contraseña'];

    // Verificamos si la contraseña ingresada es correcta
    if ($contraseña_usuario === $contraseña_correcta) {
        echo "¡Contraseña correcta! Has iniciado sesión con éxito.";
        // Reiniciamos los intentos en caso de éxito
        $_SESSION['intentos'] = 0;
    } else {
        // Incrementamos el número de intentos en la sesión
        $_SESSION['intentos']++;

        echo "Contraseña incorrecta. Intento {$_SESSION['intentos']} de 3.<br>";

        // Si llega a 3 intentos fallidos
        if ($_SESSION['intentos'] >= 3) {
            echo "Has agotado los 3 intentos. Acceso denegado.<br>";
            // Opcional: reiniciar los intentos o bloquear acceso
            session_destroy(); // Destruir la sesión después de 3 intentos
        } else {
            // Aquí es donde mostramos el botón para volver atrás
            echo '<br><button onclick="window.history.back()">Volver atrás</button>';
        }
    }
}

?>
