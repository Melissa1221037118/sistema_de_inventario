version minima de php 8.2
base de datos en mysql

--comandos para iniciar

composer install
npm install

php artisan key:generate

-- .env

copiar el .env-example y cambiarle el nombre a .env
agregar la base de datos con ka que se va a trabajar

comando para correr migraciones 

php artisan migrate

-- en diferentes terminales

php artisan serve
npm run dev

-- funcionamiento

se debe registrar un usuario, para acceder a los cruds.
