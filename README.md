# crudlstva

Bienvenidos al proyecto "crudlstva". 

Las siglas crudlstva significan:

Crud de Laravel - sweetalert2 - toastr - vue - axios.

Este es un proyecto que pretende enseñar como hacer un crud en laravel 7 usando las siguientes librerías:

1) Sweetalert2. Su página oficial es: www.sweetalert2.github.io

2) Toastr. Su página oficial es: https://codeseven.github.io/toastr/

3) Vue. Su página oficial es: https://vuejs.org/

4) Axios. Su página oficial es: https://github.com/axios/axios

Espero que les guste:

Para poder utilizar este proyecto, debes tener los siguientes requisitos:

1) debes tener la versión de PHP mayor o igual a la 7.2.5. 
para mas información visita la documentación oficial de Laravel: https://laravel.com/docs/7.x

2) debes tener instalado composer en tu equipo: https://getcomposer.org/

3) si utilizas windows, puedes descargar el programa git desde la página oficial: https://gitforwindows.org/

Si cumples con estos prerequisitos, entonces podrás instalar este proyecto.

Pasos para instalar este proyecto correctamente:

1) descarga este proyecto o clónalo con el comando: 

git clone git://github.com/schacon/grit.git

2) ejecutar el comando: 

composer install

3) copiar el archivo ".env.example" y pegarlo con el nombre: ".env". Si estas con el sistema gitforwindows, o en linux o mac, puedes ejecutar el siguiente comando: 

cp .env.example .env

4) debemos generar una nueva llave de laravel con el siguiente comando:

php artisan key:generate

5) Configura la nueva base de datos modificando el archivo ".env":

DB_CONNECTION=mysql 
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

6) ejecuta php artisan migrate

7) ejecuta npm install && npm run dev

si te da problemas, hazlo por separado
npm install
npm run dev

8) ejecuta php artisan serve y prueba el proyecto que debe funcionar.

Un saludo y Dios les bendiga a todos. 
