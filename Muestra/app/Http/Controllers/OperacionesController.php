<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    
	

	// ~/api/operaciones/suma/1/2
	public function sumar($a, $b)
	{
		$suma= $a + $b;
			
        return response()->json(array ('r'=>$suma));
		
	}
}
