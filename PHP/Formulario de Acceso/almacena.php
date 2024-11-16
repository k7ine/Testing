<?php

include('basedatos.php');

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

echo "Tu usuario es: $usuario" . "<br>";
echo "Tu contraseña es: $pass";

if ($usuario == $usuariobd && $pass == $passbd) {
    header("Location: acceso4.php"); 
} else {
    header("Location: formulario4.php");
}

?>