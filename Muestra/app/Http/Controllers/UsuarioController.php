<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Http\Request;

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
		$usuario->api_token=Str::random(60);
		$usuario->update();
        return index($request);
    }
}
