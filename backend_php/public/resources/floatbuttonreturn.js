document.addEventListener("DOMContentLoaded", function () {
    // Crear el botón flotante
    const button = document.createElement("a");
    button.href = "../index.php"; // Enlace al índice
    button.className = "float-button"; // Clase para estilos
    button.title = "Volver al inicio";

    // Crear el icono del botón
    const icon = document.createElement("i");
    icon.className = "fas fa-undo-alt"; // Clase del icono
    button.appendChild(icon); // Añadir icono al botón

    // Estilo del botón
    button.style.position = "fixed";
    button.style.bottom = "20px";
    button.style.right = "20px";
    button.style.backgroundColor = "#007bff"; // Color del botón
    button.style.color = "white"; // Color del texto del botón
    button.style.border = "none";
    button.style.borderRadius = "50%"; // Hace que el botón sea redondo
    button.style.width = "50px";
    button.style.height = "50px";
    button.style.display = "flex";
    button.style.justifyContent = "center";
    button.style.alignItems = "center";
    button.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
    button.style.fontSize = "24px"; // Tamaño del icono

    // Añadir el botón al body
    document.body.appendChild(button);
});