# backend/Dockerfile
FROM php:8.0-apache

# Instalar pdo_mysql para MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Copiar archivos del backend al contenedor
COPY ./public /var/www/html/