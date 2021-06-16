# SistemaABCC
# Venta de Auto-Partes

Sistema de altas bajas cambios y consultas para pymes, en el cual llevamos el control del inventario de un comercio de venta de autopartes

## Descripción
Para poder usar este proyecto necesitamos tener un servidor local y una conexión a nuestra base de datos, Xampp es una herramienta que nos proporciona estas herramientas para poder realizar este sistema

### Instalación
Para comenzar debemos crear una carpeta en la ruta C:xampp/htdocs/* nombre de tu carpeta * . Aquí colocaremos todas las carpetas del repositorio.

Posteriormente en el archivo httpd-vhosts.conf de la ruta C:\xampp\apache\conf\extra, vamos a añadir un virtual host con las lineas de código siguientes:

<VirtualHost *:80>
        ServerAdmin example.com  
        DocumentRoot "C:/xampp/htdocs/example.com/public"  
        ServerName *nombre de tu carpeta*  
        ErrorLog "logs/example.com-error.log"  
        CustomLog "logs/example.com-access.log" common  
        <Directory "C:/xampp/htdocs/example.com/public">  
            Options All  
            AllowOverride All  
            Require all granted  
        </Directory>  
</VirtualHost>

Y despúes nos dirijimos a la ruta C:\Windows\System32\drivers\etc y agragamos la siguiente linea en el archivo "hosts":

127.0.0.1 example.com

## Creación de la base de datos
Ya que hicimos estos cambios podemos dar Start a Apache y a MySQL de xampp y procedemos a entrar en el navegador de nuestra preferencia a localhost/phpmyadmin
Aquí debemos crear una base de datos nueva, solo colocamos el nombre y damos en el boton Crear, posteriormente crearemos una tabla con el nombre requerido y colocaremos los detalles de cada campo que coloquemos


## Especificaciones

   * Lenguaje de programación: PHP.
   * Base de datos: MySQL.
   * Servidor: Apache.
   * FrontEnd: HTML + Bootstrap
   * Sin framework BackEnd.

## Funcionalidades

   * Altas: Puedes agregar productos nuevos a la base de datos cada vez que sea necesario.
   * Bajas: Eliminar un producto no será un problema, solo da clic a un botón y el sistema lo eliminará automáticamente.
   * Consultas: Te permite hacer búsquedas dentro del sistema para encontrar un producto en específico.
   * Cambios: Te permite alterar los datos introducidos anteriormente de un producto, y actualizarlo de acuerdo a tu preferencia.

## Autor
 *  Jorge Alejandro Martínez Toris

## Video explicativo
https://youtu.be/816jrS8E5M8
