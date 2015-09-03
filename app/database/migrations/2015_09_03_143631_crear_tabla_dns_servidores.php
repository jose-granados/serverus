<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDnsServidores extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
public function up()
	{
		Schema::dropIfExists('dns_servidores');
		Schema::create('dns_servidores', function($table)
		{
			$table->integer('servidor_id')->unsigned();
			$table->string('dns');
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
		Schema::dropIfExists('dns_servidores');
	}

}
