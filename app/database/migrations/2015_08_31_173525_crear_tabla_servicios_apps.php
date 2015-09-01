<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServiciosApps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('servicios_apps');
		Schema::create('servicios_apps', function($table)
		{
			$table->integer('servicio_id')->unsigned();
			$table->integer('app_id')->unsigned();
			$table->integer('puerto');
			$table->foreign('servicio_id')->references('id')->on('servicios');
			$table->foreign('app_id')->references('id')->on('apps');
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
		Schema::dropIfExists('servicios_apps');
	}

}
