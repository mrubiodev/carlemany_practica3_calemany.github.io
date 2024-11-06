# Usa la imagen base de Nginx
FROM nginx:latest

# Copia el contenido de la carpeta "public" al directorio de contenido de Nginx
COPY ./public /usr/share/nginx/html

# Expone el puerto 80 para acceder a la aplicación
EXPOSE 80

# Comando de inicio de Nginx (este es el comando por defecto en la imagen de Nginx)
CMD ["nginx", "-g", "daemon off;"]