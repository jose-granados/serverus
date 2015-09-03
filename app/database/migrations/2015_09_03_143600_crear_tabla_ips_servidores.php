<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaIpsServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('ips_servidores');
		Schema::create('ips_servidores', function($table)
		{
			$table->integer('servidor_id')->unsigned();
			$table->string('ip');
			$table->boolean('tipo_ip')->default(0);
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
		Schema::dropIfExists('ips_servidores');
	}

}
