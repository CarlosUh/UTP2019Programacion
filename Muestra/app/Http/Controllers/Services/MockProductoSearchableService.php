<?php

namespace App\Http\Controllers\Services;
use App\Http\Controllers\Controller;
use App\Contracts\IProductSearchable;

class MockProductoSearchableService 
	extends Controller
	implements IProductSearchable
	{
	
	public function Search($name){
		return null;
	}
	
}