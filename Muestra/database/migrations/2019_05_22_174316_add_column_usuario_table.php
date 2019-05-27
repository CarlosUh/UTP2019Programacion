<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //Layout
	public function up()
    {        
		Schema::table('pendientes', function(Blueprint $table){
			$table->string('usuario');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendientes', function(Blueprint $table){
			$table->dropColumn('usuario');
		});
    }
}
