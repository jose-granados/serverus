<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuariosApps extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('usuarios_apps');
		Schema::create('usuarios_apps', function($table)
		{
			$table->integer('app_id')->unsigned();
			$table->string('usuario');
			$table->string('password');
			$table->foreign('app_id')->references('id')->on('apps');
			$table->unique( array('app_id') );
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
		Schema::dropIfExists('usuarios_apps');
	}

}
