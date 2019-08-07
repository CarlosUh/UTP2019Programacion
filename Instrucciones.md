#Favor de crear su repositorio
	
Inicializar Laravel
==================
	
* laravel new Muestra
* crear modelo Tarea
* Iniciar servidor:
	- php artisan serve
* creat migracion
	- php artisan make:migration createTarea_table
* correr migracion
	- php artisan migrate
* Creacion de la vista y controlador, configuracion de rutas
* insertar
* consultar
* Crear migracion para agregar usuario
	- php artisan make:migration addColumnUsuario_table
* Actualizar base de datos
	- php artisan migrate
* Deshacer cambios
	- php artisan migrate:rollback
* Rehacer cambios
	- php artisan migrate
	
Instalacion de adminLTE
==============
* Instalacion
	- composer global require "acacha/adminlte-laravel-installer"
	- adminlte-laravel install
	
Instalacion de Laravel CRUD Generator
==============
* Instalacion Crud Generator
	- composer require appzcoder/crud-generator --dev
	- php artisan vendor:publish --provider="Appzcoder\CrudGenerator\CrudGeneratorServiceProvider"
	
* Utilizar Crud Generator
	- Crear archivo json en crudg/tareas.json
	- php artisan crud:generate Contactos --fields_from_file="crudg/contacto.json"  --form-helper=html
	- php artisan migrate
	
Ligar rutas storage
==============================
php artisan storage:link



	
	
	
	