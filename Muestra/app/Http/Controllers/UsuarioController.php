<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $usuarios=User::All();
        return view('usuarios.listado', compact('usuarios'));
    }

	public function reestablecer(Request $request)
    {
        $usuario=User::find($request->id);
		$token=Str::random(60);
		$usuario->api_token=hash('sha256',$token);
		$usuario->update();
        return view('usuarios.token', compact('token'));
    }
	
	public function todos()
    {
        $usuarios=User::All();
        return response()->json($usuarios);
    }
	
	public function editar($id, Request $request)
    {
        $usuario=User::find($id);
		$usuario->name=$request->name;
		$usuario->update();
        return response()->json($usuario);
    }
	
	public function consulta($id)
    {
        $usuario=User::find($id);
        return response()->json($usuario);
    }
}









