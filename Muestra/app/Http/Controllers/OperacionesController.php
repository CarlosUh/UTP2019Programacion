<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\IOperaciones;

class OperacionesController extends Controller
{
    /**
     * Create a controller instance.
     *
     * @param  IOperaciones  $calculadora
     * @return void
     */
    public function __construct(IOperaciones $calculadora)
    {
        $this->calculator = $calculadora;
    }
	

	// Perform action 
	public function sumar(Request $request)
	{
		try{
			$a=$request->a;
			$b=$request->b;
			$resultado=$this->calculator->sumar($a, $b);			
			return view('operaciones.form')->with('respuesta',$resultado['r']);
			
		}catch(\ErrorException $ex){
			return view('operaciones.form')->with('error',$ex);
		}		
	}
}
