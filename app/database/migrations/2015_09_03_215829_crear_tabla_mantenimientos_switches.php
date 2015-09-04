<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMantenimientosSwitches extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('mantenimientos_switches');
		Schema::create('mantenimientos_switches', function($table)
		{
			$table->integer('mantenimiento_id')->unsigned();
			$table->integer('switch_id')->unsigned();
			$table->foreign('mantenimiento_id')->references('id')->on('mantenimientos');
			$table->foreign('switch_id')->references('id')->on('switches');
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
		Schema::dropIfExists('mantenimientos_switches');
	}

}
