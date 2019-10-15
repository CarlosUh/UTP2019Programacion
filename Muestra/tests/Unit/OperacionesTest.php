<?php

namespace Tests\Unit;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class OperacionesTest extends TestCase
{
    /**
     * Prueba de la funcion sumar desde API.
     *
     * @return void
     */
    public function testSumarPares()
    {
        $a=2;
		$b=2;
		$payload=[
		'api_token'=>'eLwkke2oUUQugmNhpmOQq2eNW7t7nei2doiPAsf7xNT5OjcxxGH8qRSNO22M'
		];
		$response=$this->
		json('POST',
		'/api/V1/IOperaciones/suma/'.$a.'/'.$b,
		$payload
		);
		$response->assertStatus(200);//Si hay respuesta
		$response->assertJson(['r'=>4]);//Validacion de respuesta del calculo
	
	
    }
	
	/**
     * Prueba de la funcion sumar desde API con datos incorrector.
     *
     * @return void
     */
    public function testSumarImpares()
    {
        $a=1;
		$b=2;
		$payload=[
		'api_token'=>'eLwkke2oUUQugmNhpmOQq2eNW7t7nei2doiPAsf7xNT5OjcxxGH8qRSNO22M'
		];
		$response=$this->
		json('POST',
		'/api/V1/IOperaciones/suma/'.$a.'/'.$b,
		$payload
		);
		$response->assertStatus(500);//Si funciona la validación
		$response->assertJson(['message'=>'Parametros invalidos.']);
    }
	
	/**
     * Prueba de la funcion sumar desde WEB.
     *
     * @return void
     */
    public function testSumarParesWeb()
    {
		$this->withoutMiddleware(\App\Http\Middleware\PerfilReadWrite::class);

		$response=$this->call('POST','/operaciones/suma',array('a'=>2,'b'=>2));
		
		$response->assertStatus(200);//Si hay respuesta
		$response->assertSee('=4');//Validacion de respuesta del calculo
	
	
    }
	
	/**
     * Prueba de la funcion sumar desde WEB con datos incorrector.
     *
     * @return void
     */
    public function testSumarImparesWeb()
    {
        $this->withoutMiddleware(\App\Http\Middleware\PerfilReadWrite::class);

		$response=$this->call('POST','/operaciones/suma',array('a'=>1,'b'=>2));
		$response->assertStatus(200);//Debe regresar una respuesta correcta
		$response->assertSee('Parametros invalidos.');//Debe mostrar el mensaje de error
    }
	
	
}


