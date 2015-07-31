<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPerfilesPermisos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('perfiles_permisos');		
		Schema::create('perfiles_permisos', function($table)
		{
			$table->integer('perfil_id')->unsigned();
			$table->integer('permiso_id')->unsigned();
			$table->foreign('perfil_id')->references('id')->on('perfiles');
			$table->foreign('permiso_id')->references('id')->on('permisos');
			$table->unique( array('perfil_id','permiso_id') );
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
		Schema::dropIfExists('perfiles_permisos');		
	}

}
