<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script>
        // Redirige al usuario a login.php después de 3 segundos
        setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
    </script>

    <style>
        /* Establece el fondo a pantalla completa */
        body {
            background-image: url('resources/bg.jpeg');
            background-size: cover;
            background-position: center;
            height: 100vh; /* Asegura que el fondo cubra toda la altura de la pantalla */
            margin: 0; /* Elimina márgenes predeterminados */
        }

        /* Estilo para la columna con un fondo grisáceo traslúcido */
        .col-md-6 {
            background-color: rgba(0, 0, 0, 0.5); /* Gris con opacidad */
            padding: 30px;
            border-radius: 10px;
            color: white; /* Asegura que el texto sea blanco */
        }

        /* Opcional: color del texto dentro de la columna */
        .col-md-6 h1, .col-md-6 p {
            color: white;
        }

    </style>
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container text-center">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">¡Sesión cerrada con éxito!</h4>
            <p>Has cerrado sesión correctamente. Serás redirigido a la página de inicio en unos momentos.</p>
            <hr>
            <p class="mb-0">Gracias por visitarnos.</p>
        </div>
        <div class="mt-3">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>
    </div>
</body>
</html>