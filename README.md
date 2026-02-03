# Sprint4Laravel-Lucas
Proyecto desarrollado como parte del Sprint 4 de ItAcademy, utilizando Laravel, MySQL, Blade, CSS, y un flujo de trabajo profesional con control de versiones en Git.
Este repositorio contiene una aplicación web completa con autenticación, gestión de juegos, categorías, reseñas, compras y carrito.

# 🚀 Instalación
Sigue estos pasos para instalar el proyecto en tu entorno local:

1. Clonar el repositorio
    git clone https://github.com/lxcxsito/Sprint4Laravel-Lucas.git
    cd Sprint4Laravel-Lucas/Sprint4Laravel


2. Instalar dependencias de PHP
composer install


3. Instalar dependencias de Node
npm install


4. Crear archivo .env
    cp .env.example .env


5. Generar la clave de la aplicación
    php artisan key:generate


6. Configurar la base de datos en .env
    Asegúrate de ajustar estos valores:
    DB_DATABASE=nombre_de_tu_bd
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_password


7. Ejecutar migraciones y seeders
    php artisan migrate --seed



# ▶️ Cómo iniciar el servidor
    Backend (Laravel)
    php artisan serve


    Esto levantará el servidor en:
    http://127.0.0.1:8000




