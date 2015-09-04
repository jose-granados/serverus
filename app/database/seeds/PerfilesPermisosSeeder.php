	<?php

class PerfilesPermisosSeeder extends Seeder {

	public function run(){

		$permisos_admin = array(
			'servicios.index',
			'servicios.create',
			'servicios.show',
			'servicios.edit',
			'servicios.destroy',

			'usuarios.index',
			'usuarios.create',
			'usuarios.show',
			'usuarios.edit',
			'usuarios.destroy',

			'servidores.index',
			'servidores.create',
			'servidores.show',
			'servidores.edit',
			'servidores.destroy',

			'switches.index',
			'switches.create',
			'switches.show',
			'switches.edit',
			'switches.destroy',

			'cpus.index',
			'cpus.create',
			'cpus.show',
			'cpus.edit',
			'cpus.destroy',

			'apps.index',
			'apps.create',
			'apps.show',
			'apps.edit',
			'apps.destroy',

			'sistemasoperativos.index',
			'sistemasoperativos.create',
			'sistemasoperativos.show',
			'sistemasoperativos.edit',
			'sistemasoperativos.destroy',

			'localizaciones.index',
			'localizaciones.create',
			'localizaciones.show',
			'localizaciones.edit',
			'localizaciones.destroy',
		);

		$permisos_power_user = array(
			'servidores.index',
			'servidores.create',
			'servidores.show',
			'servidores.edit',
			'servidores.destroy',

			'switches.index',
			'switches.create',
			'switches.show',
			'switches.edit',
			'switches.destroy',

			'apps.index',
			'apps.create',
			'apps.show',
			'apps.edit',
			'apps.destroy',
		);

		$permisos_user = array(
			'servidores.index',

			'switches.index',

			'apps.index',
		);

		PerfilPermiso::truncate();
		PerfilPermiso::insertPermisosPerfil($permisos_admin, 'Admin');
		PerfilPermiso::insertPermisosPerfil($permisos_power_user, 'Power User');
		PerfilPermiso::insertPermisosPerfil($permisos_user, 'User');

	}

}

?>
