<?php
namespace App\Http\Controllers;

use App\Models\Demo\Tarea;
use App\Http\Controllers\Controller;

class TareaController extends Controller
{
	
	public function mostrar(){
		$cantidad=Tarea::count();
		//$tareas=Tarea::All();
		return view('tareas.listado',
			['existencias'=>$cantidad]
		);
	}
	
}
