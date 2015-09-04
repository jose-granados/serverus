<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('logs');
		Schema::create('logs', function($table)
		{
			$table->increments('id');
			$table->boolean('estatus')->default(1);
			$table->string('descripcion');
			$table->string('ruta');
			$table->integer('indice');
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
		Schema::dropIfExists('logs');
	}

}
