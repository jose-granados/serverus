<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('usuarios');
		Schema::create('usuarios', function($table){
			$table->increments('id');
			$table->boolean('estatus')->default(1);
			$table->integer('perfil_id');
			$table->foreign('perfil_id')->references('id')->on('perfiles');
			$table->string('nombre');
			$table->string('apellido_paterno');
			$table->string('apellido_materno');
			$table->string('telefono');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('remember_token');
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
		Schema::dropIfExists('usuarios');
	}

}
