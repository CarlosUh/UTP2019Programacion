<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IOperaciones;
use App\Contracts\IProductSearchable;

class OperacionesService 	
	extends Controller
	implements IOperaciones{
		
	/**
     * Create a controller instance.
     *
     * @param  IOperaciones  $calculadora
     * @return void
     */
    public function __construct(IProductSearchable $buscador)
    {
        $this->busquedas = $buscador;
    }
	
	//Esta funcion solo sumará numeros pares.
	public function sumar($a, $b)
	{	
		$respuestaServicioFalso=$this->
			busquedas->Search("Producto x");
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