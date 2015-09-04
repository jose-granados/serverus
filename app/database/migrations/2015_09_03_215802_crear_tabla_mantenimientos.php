<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMantenimientos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('mantenimientos');
		Schema::create('mantenimientos', function($table)
		{
			$table->increments('id');
			$table->string('descripcion');
			$table->string('fecha');
			$table->string('responsable_nombre');
			$table->string('responsable_correo');
			$table->string('responsable_telefono');
			$table->boolean('tipo_mantenimiento')->default(1);
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
		Schema::dropIfExists('mantenimientos');
	}

}
