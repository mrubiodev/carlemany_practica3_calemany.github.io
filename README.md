# carlemany_practica3_calemany.github.io
Proyecto: Aplicación Web de Registro y Autenticación

Descripción

Este proyecto consiste en el desarrollo de una aplicación web que permite el registro y autenticación de usuarios. La aplicación estará contenida en un contenedor Docker, lo cual facilita su despliegue en cualquier entorno. La estructura de la aplicación incluye un front-end, un back-end y un gestor de base de datos accesible mediante PhpMyAdmin.

Funcionalidades principales

1. Registro de usuarios: Permite a nuevos usuarios registrarse en la aplicación.

2. Inicio de sesión: Los usuarios pueden autenticarse para acceder a las secciones privadas de la aplicación.

3. Cierre de sesión: Finaliza la sesión actual y redirige al usuario a la página de login o registro.

4. Contraseñas seguras: Las contraseñas se almacenan de forma segura mediante hashing.

5. Gestión de sesiones: La aplicación controla el acceso a las diferentes páginas en función del estado de autenticación del usuario.

6. Visualización de usuarios: Una vez autenticado, el usuario accede a una página que muestra todos los usuarios registrados en tarjetas de Bootstrap (Bootstrap Cards).

Ejecución

La aplicación puede ejecutarse con Docker mediante el comando:

docker-compose up -d

Se podra configurar esto atraves del fichero .env

Para acceder a la aplicación, navega a http://localhost:8080/.

Para acceder a PhpMyAdmin, navega a http://localhost:8081/.

Requisitos

Docker y Docker Compose instalados

Conexión a internet para descargar las imágenes de Docker necesarias


Tecnologías

Frontend: HTML, CSS (Bootstrap) y PHP.

Backend: Framework Flask de Python

Base de datos: MySQL accesible a través de PhpMyAdmin.

Docker: Contenedores para la aplicación web y base de datos.

Diseño y Responsividad

La aplicación es responsive y cuenta con un diseño adaptativo para dispositivos móviles y de escritorio. Se pueden aplicar estilos, animaciones y efectos según las preferencias del desarrollador para mejorar la usabilidad y estética del proyecto.

Etapas del proyecto
Hito 1: Configuración del Proyecto

Configuración del repositorio de Git y estructura de carpetas

Creación del Dockerfile para el backend de la aplicación

Creación del docker-compose.yml

Configuración inicial de la base de datos en Docker y verificación de acceso a PhpMyAdmin

---

Hito 2: Desarrollo de la Funcionalidad de Autenticación de Usuarios

Desarrollo del formulario de registro y login en el frontend (HTML/CSS)

Diseño de la estructura de la base de datos para usuarios

Desarrollo de la lógica de registro y login en el backend

Implementación de hashing de contraseñas y manejo de sesiones (inicio y cierre de sesión)

---

Hito 3: Página de Usuarios (Protegida)

Desarrollo del frontend de la página protegida, incluyendo diseño de tarjetas con Bootstrap

Llamada desde el frontend para obtener la lista de usuarios

Implementación de un endpoint en el backend para devolver la lista de usuarios

Conexión con la base de datos para recuperar y enviar los datos de usuarios

---

Hito 4: Mejora del Diseño y Responsividad

Aplicar mejoras de diseño y estilo en las páginas de registro y login

Asegurar responsividad en la interfaz de usuario usando Bootstrap o CSS

Revisar la usabilidad de las páginas en distintos dispositivos

Ajustes de estilo y pruebas de diseño en la página de usuarios

---

Hito 5: Pruebas y Documentación

Documentación técnica del proyecto y funciones clave

Pruebas de la interfaz y experiencia de usuario

Pruebas de funcionalidad de autenticación y seguridad de contraseñas

Actualización del README y creación de guías de configuración y despliegue


