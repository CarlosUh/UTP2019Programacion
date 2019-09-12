<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Demo\Tarea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
//composer require guzzlehttp/guzzle
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;

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
				$tarea->description=$request
				->archivo->getClientOriginalExtension();
			}else{
				$tarea->imagen='public/noimagen.jpg';
			}
			//Auth::id();			
			$tarea->save();
			if(!$request->has('soa')){
				try{
					$cliente=new Client();
					$respuesta=$cliente
					->post("http://IP:Puerto/ruta/a/controlador",
					[
						'form_params'=>[
							'api_token'=>'token',
							'name'=>$request->name,
							'descripcion'=>$request->description,
							'estatus'=>$request->estatus,
							'soa'=>true
										]
					]);
				}catch(RequestException $e){
					var_dump($e);
				}
			}
			return redirect()->route("home");
		}
		return redirect()->route("login");
	}

	public function ver(Request $request){
		$idTarea=$request->id;
		$tarea=Tarea::find($idTarea);
		return Storage::download(
			$tarea->imagen, 
			'logo.'.$tarea->descripcion,
			['Content-Disposition'=>'inline']);
	}
}





