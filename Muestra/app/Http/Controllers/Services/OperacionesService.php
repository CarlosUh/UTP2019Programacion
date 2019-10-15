<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IOperaciones;

class OperacionesService 	
	extends Controller
	implements IOperaciones{
		
	//Esta funcion solo sumará numeros pares.
	public function sumar($a, $b)
	{	
		$modA=$a%2;
		$modB=$b%2;
		if($modA==0 && $modB==0){	//Ambos son pares
			$suma= $a + $b;
			return array('r'=>$suma);
		}else						//Algun numero no es par
		{
			throw new \ErrorException('Parametros invalidos.');
		}
        		
	}
}