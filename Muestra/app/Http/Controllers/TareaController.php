<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Demo\Tarea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class TareaController extends Controller
{
	
	public function mostrar(Request $request){
		if(isset($request->filtro)){
			$user=User::find($request->filtro);
		}else{
			$user=Auth::user();
		}
		
		$usuarios=User::All();	
		$cantidad=Tarea::
			where('usuario', $user->email)
			->count();
			
		$tareas=Tarea::
			where('usuario', $user->email)
			->orderby('name','desc')
			->get();
		return view('tareas.listado',
			['existencias'=>$cantidad,
			'tareas'=>$tareas,
			'usuarios'=>$usuarios]
		);
	}
	
	public function form(){
		return view("tareas.tarea");
	}
	
	public function guardar(Request $request){
		if(Auth::check()){
			$user=Auth::user();
			$tarea=new Tarea;
			$tarea->name=$request->name;
			$tarea->description=$request->description;
			$tarea->estatus=$request->estatus;
			$tarea->usuario=$user->email;
			if($request->hasFile('archivo')){
				$nombreArchivo=$request->archivo
					->store('imagenes');
				$tarea->imagen=$nombreArchivo;
			}else{
				$tarea->imagen='public/noimagen.jpg';
			}
			//Auth::id();			
			$tarea->save();
			return redirect()->route("home");
		}
		return redirect()->route("login");
	}
}
