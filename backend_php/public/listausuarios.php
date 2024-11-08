<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión de usuario, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

include 'db.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <h2 class="text-center mt-5">Lista de Usuarios</h2>
        <div class="row mt-4">
            <?php
            // Crear una instancia de la base de datos y obtener la conexión
            $database = new Database();
            $conn = $database->getConnection();

            // Consulta SQL para obtener la lista de usuarios
            $sql = "SELECT username, nombre FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            // Verificar si hay resultados y mostrar la lista de usuarios
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="col-md-4 mb-3">';
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($row['nombre']) . '</h5>';
                    echo '<p class="card-text"><strong>Usuario:</strong> ' . htmlspecialchars($row['username']) . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No hay usuarios registrados.</p>";
            }

            // Cerrar la conexión
            $conn = null;
            ?>
        </div>
        <a href="logout.php" class="btn btn-secondary mt-4">Cerrar Sesión</a>
    </div>
</body>
</html>
