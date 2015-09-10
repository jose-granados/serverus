<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('servidores');
		Schema::create('servidores', function($table)
		{
			$table->increments('id');
			$table->boolean('estatus')->default(1);
			$table->string('nombre');
			$table->string('ram');
			$table->string('hdd');
			$table->boolean('verificar')->default(0);
			$table->boolean('vnc')->default(0);
			$table->string('vnc_ip'); 
			$table->string('vnc_pass');
			$table->string('vnc_puerto');
			$table->boolean('activo')->default(1);
			$table->integer('localizacion_id')->unsigned();
			$table->integer('cpu_id')->unsigned();
			$table->integer('sistema_operativo_id')->unsigned();
			$table->integer('tipo_servidor_id')->unsigned();
			$table->foreign('localizacion_id')->references('id')->on('localizaciones');
			$table->foreign('cpu_id')->references('id')->on('cpus');
			$table->foreign('sistema_operativo_id')->references('id')->on('sistemas_operativos');
			$table->foreign('tipo_servidor_id')->references('id')->on('tipos_servidores');
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
		Schema::dropIfExists('servidores');
	}

}
