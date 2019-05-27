#Favor de crear su repositorio
	
Inicializar Laravel
==================
	
* laravel new Muestra
* crear modelo Tarea
* creat migracion
	- php artisan make:migration createTarea_table
* correr migracion
	- php artisan migrate
* Creacion de la vista y controlador, configuracion de rutas
* insertar
* consultar
* Crear migracion para agregar usuario
	php artisan make:migration addColumnUsuario_table
* Acualizar base de datos
	php artisan migrate
* Deshacer cambios
	php artisan migrate:rollback
* Rehacer cambios
	php artisan migrate
