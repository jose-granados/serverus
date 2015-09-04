<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMantenimientosServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('mantenimientos_servidores');
		Schema::create('mantenimientos_servidores', function($table)
		{
			$table->integer('mantenimiento_id')->unsigned();
			$table->integer('servidor_id')->unsigned();
			$table->foreign('mantenimiento_id')->references('id')->on('mantenimientos');
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
		Schema::dropIfExists('mantenimientos_servidores');
	}

}
