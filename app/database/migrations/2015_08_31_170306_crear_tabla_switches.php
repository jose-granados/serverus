<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSwitches extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('switches');
		Schema::create('switches', function($table)
		{
			$table->increments('id');
			$table->boolean('estatus')->default(1);
			$table->string('nombre');
			$table->string('modelo');
			$table->string('tipo');
			$table->string('serie');
			$table->string('version');
			$table->string('usuario');
			$table->string('password');
			$table->integer('localizacion_id')->unsigned();
			$table->foreign('localizacion_id')->references('id')->on('localizaciones');
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
		Schema::dropIfExists('switches');
	}

}
