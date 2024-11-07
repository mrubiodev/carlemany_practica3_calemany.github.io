CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    nombre VARCHAR(100),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar usuario con nombre completo y contraseña hash admin/admin
INSERT INTO users (username, nombre, password) VALUES ('admin', 'Administrador', '$2b$12$4wmvykpYjMPAZSZ.UvzwwOwzeF9TK.7iulVzHcV0VCwuC8Y/Oiv4u');