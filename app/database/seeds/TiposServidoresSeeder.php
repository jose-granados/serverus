<?php

class TiposServidoresSeeder extends Seeder {

	public function run(){

		TiposServidores::truncate();
		TiposServidores::insert(array(
			array('id'=>1,'nombre'=>'Fisico'),
			array('id'=>2,'nombre'=>'Virtual')
		));
	}
}

?>
