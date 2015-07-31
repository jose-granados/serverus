<?php

class PermisosSeeder extends Seeder {

	public function run(){

		Permiso::truncate();
		Permiso::insert(array(
			array('nombre_permiso'=>'crear.servidor'),
			array('nombre_permiso'=>'ver.servidor'),
			array('nombre_permiso'=>'editar.servidor'),
			array('nombre_permiso'=>'eliminar.servidor'),
		));

	}

}

?>
