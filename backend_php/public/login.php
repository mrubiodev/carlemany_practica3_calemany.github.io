<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
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
}
$conn->close();
?>
