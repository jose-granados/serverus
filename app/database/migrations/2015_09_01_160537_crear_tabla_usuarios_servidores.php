<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuariosServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('usuarios_servidores');
		Schema::create('usuarios_servidores', function($table)
		{
			$table->integer('servidor_id')->unsigned();
			$table->string('usuario');
			$table->string('password');
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
		Schema::dropIfExists('usuarios_servidores');
	}

}
