<?php
// backend/index.php
require_once 'db.php';

// Crear una instancia de la conexión
$database = new Database();
$db = $database->getConnection();

// Comprobar si la conexión fue exitosa
if ($db) {
    $message = "Conexión con la base de datos establecida correctamente.";
} else {
    $message = "Error al conectar con la base de datos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .message {
            font-size: 1.5em;
            color: #4CAF50; /* Verde si conexión exitosa */
        }
        .error {
            font-size: 1.5em;
            color: #f44336; /* Rojo si falla la conexión */
        }
        h1 {
        font-size: 2.5em;
        color: #333;
        }
        p {
        font-size: 1.2em;
        color: #666;
        }
        .icon {
        font-size: 4em;
        color: #FFA500;
        margin-bottom: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
    <div class="icon">🚧</div>
    <h1>Página en Construcción</h1>
    <p>Estamos trabajando para traerte una nueva experiencia. ¡Vuelve pronto!</p>
        <p class="<?php echo $db ? 'message' : 'error'; ?>">
            <?php echo $message; ?>
        </p>
    </div>
</body>
</html>
