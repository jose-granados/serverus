<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaApps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('apps');
		Schema::create('apps', function($table)
		{
			$table->increments('id');
			$table->boolean('estatus')->default(1);
			$table->string('nombre');
			$table->string('ruta');
			$table->string('responsable_nombre');
			$table->string('responsable_correo');
			$table->string('responsable_telefono');
			$table->integer('servidor_id')->unsigned();
			$table->foreign('servidor_id')->references('id')->on('servidores');
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
		Schema::dropIfExists('apps');
	}

}
