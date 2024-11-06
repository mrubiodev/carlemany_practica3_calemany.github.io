# Usa la imagen base de Python
FROM python:3.9-slim

# Establece el directorio de trabajo en /app
WORKDIR /app

# Copia los archivos de requirements e instálalos
COPY requirements.txt ./
RUN pip install --no-cache-dir -r requirements.txt

# Copia el resto de la aplicación en el contenedor
COPY . .

# Define la variable de entorno para indicar el modo de producción
ENV FLASK_ENV=production

# Exponer el puerto 80 para Flask
EXPOSE 80

# Comando para ejecutar la aplicación
CMD ["python", "app.py"]
