<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSistemasOperativos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('sistemas_operativos');
		Schema::create('sistemas_operativos', function($table){
			$table->increments('id');
			$table->boolean('estatus')->default(1);
			$table->string('nombre');
			$table->string('arquitectura');
			$table->string('version');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('sistemas_operativos');
	}

}
