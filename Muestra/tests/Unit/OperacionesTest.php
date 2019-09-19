<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OperacionesTest extends TestCase
{
    /**
     * Prueba de la funcion sumar.
     *
     * @return void
     */
    public function testSumarTest()
    {
        $a=1;
		$b=2;
		$payload=[
		'api_token'=>'eLwkke2oUUQugmNhpmOQq2eNW7t7nei2doiPAsf7xNT5OjcxxGH8qRSNO22M'
		];
		$response=$this->
		json('POST',
		'/api/operaciones/suma/'.$a.'/'.$b,
		$payload
		);
		$response->assertStatus(200);//Si hay respuesta
		$response->assertJson(['r'=>3]);//Validacion de respuesta
	
	
    }
}


