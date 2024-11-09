<?php
// login.php
session_start();

// Check if session exists
$isLoggedIn = isset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./resources/basic.css">
    
</head>
<body class="d-flex align-items-center">

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="mb-4 text-white">Bienvenido</h1>
                <p class="lead mb-4 text-white">Por favor, elige una opción:</p>
                <div class="d-flex justify-content-center">
                    <?php if ($isLoggedIn): ?>
                        <!-- Botón de Lista de Usuarios -->
                        <a href="listausuarios.php" class="btn btn-primary btn-lg mx-2">Lista de Usuarios</a>
                        <!-- Botón de Cerrar Sesión -->
                        <a href="logout.php" class="btn btn-danger btn-lg mx-2">Cerrar Sesión</a>
                    <?php else: ?>
                        <!-- Botón de Iniciar sesión -->
                        <a href="login.php" class="btn btn-primary btn-lg mx-2">Iniciar sesión</a>
                        <!-- Botón de Registrarse -->
                        <a href="registro.php" class="btn btn-success btn-lg mx-2">Registrarse</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>