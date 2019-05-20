<?php
namespace App\Http\Controllers;

use App\Models\Demo\Tarea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TareaController extends Controller
{
	
	public function mostrar(){
		$cantidad=Tarea::count();
		$tareas=Tarea::All();
		return view('tareas.listado',
			['existencias'=>$cantidad,
			'tareas'=>$tareas]
		);
	}
	
	public function form(){
		return view("tareas.tarea");
	}
	
	public function guardar(Request $request){
		$tarea=new Tarea;
		$tarea->name=$request->name;
		$tarea->description=$request->description;
		$tarea->estatus=$request->estatus;
		$tarea->save();
		return redirect()->route("home");
	}
}
