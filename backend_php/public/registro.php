<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./resources/basic.css">
</head>
<body class="bg-light">
    <div class="container">
        <h2 class="text-center mt-5">Registro de Usuario</h2>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <form action="registro.php" method="POST">
                    <div class="form-group">
                        <label for="usuario">Nombre de usuario</label>
                        <input type="text" name="usuario" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
// registro.php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $database = new Database();
    $conn = $database->getConnection();

    // Preparar la consulta de inserción de usuario
    $sql = "INSERT INTO users (username, nombre, password) VALUES (:usuario, :nombre, :password)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':password', $password);

    try {
        $stmt->execute();
        echo "<script>alert('Registro exitoso'); window.location.href='login.php';</script>";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null; // Cerrar la conexión
}
?>
