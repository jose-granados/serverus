<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCorreo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('correo_configuracion');
		Schema::create('correo_configuracion', function($table)
		{
			$table->increments('id');
			$table->string('correo');
			$table->string('password');
			$table->string('smtp');
			$table->integer('puerto_salida');
			$table->boolean('conexion_cifrada')->default(0);
			$table->boolean('tipo_conexion_cifrada')->default(1);
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
		Schema::dropIfExists('correo_configuracion');
	}

}
