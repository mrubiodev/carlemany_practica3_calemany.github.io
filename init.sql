CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insertar usuario con contraseña hash admin/admin
INSERT INTO users (username, password) VALUES ('admin', '$2b$12$4wmvykpYjMPAZSZ.UvzwwOwzeF9TK.7iulVzHcV0VCwuC8Y/Oiv4u');