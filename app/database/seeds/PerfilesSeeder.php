<?php

class PerfilesSeeder extends Seeder {

	public function run(){

		Perfil::truncate();
		Perfil::insert(array(
			array('nombre_perfil'=>'Admin'),
			array('nombre_perfil'=>'Power User'),
			array('nombre_perfil'=>'User'),
		));

	}

}

?>
