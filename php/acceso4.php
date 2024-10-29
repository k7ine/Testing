<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema Corporativo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: #f4f4f4;
        }

        /* Estilo de la barra lateral */
        .sidebar {
            width: 250px;
            background: #34495e;
            color: white;
            padding: 20px;
            position: fixed;
            height: 100%;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #ffdf6c;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background: #ff7a18;
        }

        /* Estilo del contenedor principal */
        .main {
            margin-left: 250px;
            padding: 20px;
            width: calc(100% - 250px);
            overflow-y: auto;
        }

        .main h1 {
            color: #34495e;
            margin-bottom: 20px;
        }

        /* Tarjetas de información */
        .card {
            background: white;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 15px 0;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-2px);
        }

        .card h3 {
            margin-bottom: 15px;
            color: #34495e;
        }

        .card p {
            color: #7f8c8d;
        }

        /* Estilo del pie de página */
        footer {
            margin-top: 20px;
            text-align: center;
            color: #34495e;
            font-size: 0.9em;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>Panel de Control</h2>
        <ul>
            <li><a href="#"><i class="fas fa-tachometer-alt"></i> Tablero</a></li>
            <li><a href="#"><i class="fas fa-users"></i> Usuarios</a></li>
            <li><a href="#"><i class="fas fa-chart-line"></i> Informes</a></li>
            <li><a href="#"><i class="fas fa-cog"></i> Configuración</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
        </ul>
    </div>

    <div class="main">
        <h1>Bienvenido a su Dashboard</h1>

        <div class="card">
            <h3>Actividad Reciente</h3>
            <p>Usted ha completado 5 tareas esta semana.</p>
        </div>

        <div class="card">
            <h3>Usuarios Nuevos</h3>
            <p>Han registrado 3 nuevos usuarios en las últimas 24 horas.</p>
        </div>

        <div class="card">
            <h3>Informes de Ventas</h3>
            <p>Las ventas han aumentado en un 20% en comparación con el mes anterior.</p>
        </div>

        <footer>
