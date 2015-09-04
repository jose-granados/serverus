<?php

class PermisosSeeder extends Seeder {

	public function run(){

		Permiso::truncate();
		Permiso::insert(array(
			array('nombre_permiso'=>'servicios.index'),
			array('nombre_permiso'=>'servicios.create'),
			array('nombre_permiso'=>'servicios.show'),
			array('nombre_permiso'=>'servicios.edit'),
			array('nombre_permiso'=>'servicios.destroy'),

			array('nombre_permiso'=>'usuarios.index'),
			array('nombre_permiso'=>'usuarios.create'),
			array('nombre_permiso'=>'usuarios.show'),
			array('nombre_permiso'=>'usuarios.edit'),
			array('nombre_permiso'=>'usuarios.destroy'),

			array('nombre_permiso'=>'servidores.index'),
			array('nombre_permiso'=>'servidores.create'),
			array('nombre_permiso'=>'servidores.show'),
			array('nombre_permiso'=>'servidores.edit'),
			array('nombre_permiso'=>'servidores.destroy'),

			array('nombre_permiso'=>'switches.index'),
			array('nombre_permiso'=>'switches.create'),
			array('nombre_permiso'=>'switches.show'),
			array('nombre_permiso'=>'switches.edit'),
			array('nombre_permiso'=>'switches.destroy'),

			array('nombre_permiso'=>'cpus.index'),
			array('nombre_permiso'=>'cpus.create'),
			array('nombre_permiso'=>'cpus.show'),
			array('nombre_permiso'=>'cpus.edit'),
			array('nombre_permiso'=>'cpus.destroy'),

			array('nombre_permiso'=>'apps.index'),
			array('nombre_permiso'=>'apps.create'),
			array('nombre_permiso'=>'apps.show'),
			array('nombre_permiso'=>'apps.edit'),
			array('nombre_permiso'=>'apps.destroy'),

			array('nombre_permiso'=>'sistemasoperativos.index'),
			array('nombre_permiso'=>'sistemasoperativos.create'),
			array('nombre_permiso'=>'sistemasoperativos.show'),
			array('nombre_permiso'=>'sistemasoperativos.edit'),
			array('nombre_permiso'=>'sistemasoperativos.destroy'),

			array('nombre_permiso'=>'localizaciones.index'),
			array('nombre_permiso'=>'localizaciones.create'),
			array('nombre_permiso'=>'localizaciones.show'),
			array('nombre_permiso'=>'localizaciones.edit'),
			array('nombre_permiso'=>'localizaciones.destroy'),
			
			array('nombre_permiso'=>'mantenimientos.index'),
			array('nombre_permiso'=>'mantenimientos.create'),
			array('nombre_permiso'=>'mantenimientos.show'),
			array('nombre_permiso'=>'mantenimientos.edit'),
			array('nombre_permiso'=>'mantenimientos.destroy'),
			
			array('nombre_permiso'=>'logs.index'),

		));

	}

}

?>
