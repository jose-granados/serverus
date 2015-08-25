<?php

class UsuariosSeeder extends Seeder {

	public function run(){

		Usuario::truncate();
		Usuario::insert(array(
			array(
				'email'=>'serverus@test.com',
				'password'=>Hash::make('bsd123'),
			)
		));
	}
}

?>
