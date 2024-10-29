<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $nombre = ($_POST['nombre']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    
    // Mostrar un mensaje de bienvenida
    echo "<h1>Bienvenido, $nombre!</h1>";
    echo "<p>Tu correo electrónico es: $email</p>";
    echo "<p>Tu contraseña es: $password</p>";
    // Nota: No debes mostrar contraseñas en un entorno real por razones de seguridad.
}
?>