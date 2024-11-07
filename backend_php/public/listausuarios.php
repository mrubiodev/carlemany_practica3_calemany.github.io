<?php
include 'db.php';
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
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
            $sql = "SELECT usuario, nombre FROM usuarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4 mb-3">';
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row['nombre'] . '</h5>';
                    echo '<p class="card-text"><strong>Usuario:</strong> ' . $row['usuario'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No hay usuarios registrados.</p>";
            }
            $conn->close();
            ?>
        </div>
        <a href="logout.php" class="btn btn-secondary mt-4">Cerrar Sesión</a>
    </div>
</body>
</html>
