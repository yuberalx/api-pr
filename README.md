API-PERSONAJES MARVEL

Genera los endpoints para la administracion de y servicio de informacion de los personajes y lugares a los que estos pertenecen segun la ruta configurada:

ENDPONITS : http://127.0.0.1:8000/api/personaje --- http://127.0.0.1:8000/api/lugar

GET:

![image](https://github.com/yuberalx/api-pr/assets/104799622/7bfa7559-b1a4-4949-86b5-1ba0a6cb3030)
![image](https://github.com/yuberalx/api-pr/assets/104799622/a5b86426-cb52-4161-b966-466a294790c1)

POST: 

![image](https://github.com/yuberalx/api-pr/assets/104799622/d706c7b7-23a9-4c96-9eaa-4216ac934479)

DELETE: agregamos el id a eliminar

![image](https://github.com/yuberalx/api-pr/assets/104799622/757d2055-f900-4103-84a7-0f6e984c72fe)

PUT: agregamos el id  a modificar

![image](https://github.com/yuberalx/api-pr/assets/104799622/7ae017a3-8933-46a7-ab2f-d37e08c7e994)





Requisitos

Laravel 9.8.1​
php 8.1
MariaDB 11.2.0

Instalacion:
1. Clonar el repositorio desde GitHub: https://github.com/yuberalx/api-pr.git
2. Instalar las dependencias del proyecto:
   cd tuproyecto
   composer install
3.Copiar el archivo de configuración .env y configurar las variables de entorno necesarias:
    En este caso configurar la base de datos con sus credenciales en el archivo .env
4. Generar una clave de aplicación:
    php artisan key:generate
5.Ejecutar las migraciones de la base de datos:
    php artisan migrate

 6. Generar el seeder de la tabla lugars:
    php artisan db:seed
    en este caso solo deje datos de prueba para generar lugares a los que pertenece x personaje configurados con los id 1, 2 y 3 

 7.Ejecutar el servidor de desarrollo:
    php artisan serve

