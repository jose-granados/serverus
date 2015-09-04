<?php

class UsuariosSeeder extends Seeder {

	public function run(){

		Usuario::truncate();
		Usuario::insert(array(
			array(
				'email'=>'serverus@test.com',
				'perfil_id'=>1,
				'password'=>Hash::make('bsd123'),
			)
		));
	}
}

?>
