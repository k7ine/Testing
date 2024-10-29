<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #e0f7fa; /* Fondo suave y fresco */
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            border: 2px solid #00796b; /* Borde de color verde */
        }

        h2 {
            color: #00796b; /* Título en verde */
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
        }

        label {
            color: #555;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 2px solid #00796b; /* Borde en verde */
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            border-color: #004d40; /* Verde oscuro al enfocar */
            outline: none; /* Quitar el borde de enfoque por defecto */
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #00796b; /* Botón verde */
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #004d40; /* Verde más oscuro al pasar el mouse */
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Iniciar Sesión</h2>
        <form action="./recibe4.php" method="post">
            <label for="nombre">Usuario:</label>
            <input type="text" name="usuario" required>

            <label for="apellido">Contraseña:</label>
            <input type="password" name="pass" required>

            <input type="submit" value="Enviar">
        </form>
        <div class="footer">
            <p>© 2024 Empresa </p>
            <p>https://github.com/k7ine</p>
        </div>
    </div>

</body>
</html>
