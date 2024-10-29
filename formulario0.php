<!--Formulario de Registro de Usuario: Crea un formulario que permita a los usuarios ingresar 
su nombre, correo electrónico y contraseña. 
Al enviar el formulario, muestra un mensaje de bienvenida que incluya el nombre del usuario.
-->

<body>
    <h1>Registro de Usuario</h1>
    <form action="registro0.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Registrarse">
    </form>
</body>
