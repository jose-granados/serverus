<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement("SET foreign_key_checks = 0");

		$this->call('ConfiguracionesSeeder');
		$this->call('PerfilesSeeder');
		$this->call('PermisosSeeder');
		$this->call('PerfilesPermisosSeeder');
		$this->call('UsuariosSeeder');
		
		DB::statement("SET foreign_key_checks = 1");
	}

}
