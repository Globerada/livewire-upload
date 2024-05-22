# Servicio de Subida de Imágenes

Este proyecto es un servicio de subida de imágenes construido con Laravel y Livewire. Permite a los usuarios subir imágenes a un servidor y proporciona una URL para cada imagen subida.

## Características

-   Subida de imágenes con vista previa en tiempo real
-   Generación de URL para imágenes subidas
-   Validación de tipos de archivos y tamaño de archivos
-   Soporte para múltiples formatos de imagen (configurable)

## Tecnologías utilizadas

-   Laravel: un marco de trabajo PHP para la construcción de aplicaciones web siguiendo el patrón MVC.
-   Livewire: una biblioteca de Laravel para la creación de componentes dinámicos en el lado del servidor.
-   (Otras bibliotecas listadas en `composer.json`)

## Instalación

1. Clona este repositorio en tu máquina local
2. Navega a la carpeta del proyecto en tu terminal
3. Ejecuta `composer install` para instalar las dependencias del proyecto
4. Copia `.env.example` a `.env` y configura tus variables de entorno
5. Ejecuta `php artisan key:generate` para generar una clave de aplicación
6. Ejecuta `php artisan serve` para iniciar el servidor de desarrollo

## Configuración

Puedes configurar los tipos de archivos permitidos y el tamaño máximo de archivo en el archivo de configuración `config/filesystems.php` bajo las claves `upload.allowed_file_types` y `upload.max_file_size` respectivamente.

## Uso

Navega a la URL de tu aplicación en tu navegador para ver la interfaz de subida de imágenes. Selecciona un archivo para subir y haz clic en el botón de subida. Una vez que la imagen se ha subido, se te proporcionará una URL que puedes usar para acceder a la imagen.

## Contribución

Las contribuciones son bienvenidas. Por favor, abre un problema o una solicitud de extracción si tienes algo que te gustaría añadir o cambiar.

## Licencia

Este proyecto está licenciado bajo la licencia MIT.
