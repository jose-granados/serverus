<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVmsServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('vms_servidores');
		Schema::create('vms_servidores', function($table)
		{
			$table->integer('hijo_servidor_id')->unsigned();
			$table->integer('padre_servidor_id')->unsigned();
			$table->foreign('hijo_servidor_id')->references('id')->on('servidores');
			$table->foreign('padre_servidor_id')->references('id')->on('servidores');
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
		Schema::dropIfExists('vms_servidores');
	}

}
