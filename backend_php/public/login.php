<?php
// login.php

include 'db.php';
session_start(); // Iniciar sesión antes de cualquier salida de HTML

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $database = new Database();
    $conn = $database->getConnection();

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $usuario);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $row['password'])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: listausuarios.php");
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado');</script>";
    }
    $conn = null; // Cerrar la conexión
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
<body class="bg-light">
    <div class="container">
        <h2 class="text-center mt-5">Iniciar Sesión</h2>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
