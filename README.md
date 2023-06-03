## About backend_fullstack

Esta es una aplicación desarrollada en Laravel, recibe datos de un formulario mediante la configuración de una API.

El formulario está en el siguiente repositorio https://github.com/AyrielNoriega/page_fullstack. Sigue los pasos mencionados allí para su instalación.

## Requisitos Previos

Asegúrate de tener las siguientes herramientas instaladas en tu sistema:

- PHP 8.2.0 
- Composer 2.5.5
- MySQL
- También puedes utilizar XAMPP para toda la configuracion de PHP.


## Configuración de la API

La aplicación recibe los datos de un formulario a través de esta API. Sigue estos pasos para configurar la API:

1. Clona el repositorio de la API de Laravel en tu máquina local:
    ```bash
    git clone https://github.com/AyrielNoriega/backend_fullstack

2. Navega hasta el directorio del proyecto de la API:
    ```bash
    cd backend_fullstack
    
3. Instala las dependencias de la API utilizando Composer:
    ```bash
    composer install
    
4. Configura la conexión a la base de datos y otros parámetros en el archivo '.env' (debes crear el archivo .env en la raiz del proyecto).

5. Ejecuta las migraciones:
    ```bash
    php artisan migrate
    
6. Inicia el servidor de desarrollo de la API:
    ```bash
    php artisan serve
    
Si utilizas XAMPP, inicia apache y mySQL

7. Puedes ejecutar los test:
    ```bash
    php artisan test





