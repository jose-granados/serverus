	<?php

class PerfilesPermisosSeeder extends Seeder {

	public function run(){

		$permisos_admin = array(
			'index',

			'servicios.index',
			'servicios.create',
			'servicios.store',
			'servicios.show',
			'servicios.edit',
			'servicios.update',
			'servicios.destroy',

			'usuarios.index',
			'usuarios.create',
			'usuarios.store',
			'usuarios.show',
			'usuarios.edit',
			'usuarios.update',
			'usuarios.destroy',

			'servidores.index',
			'servidores.create',
			'servidores.store',
			'servidores.show',
			'servidores.edit',
			'servidores.update',
			'servidores.destroy',

			'switches.index',
			'switches.create',
			'switches.store',
			'switches.show',
			'switches.edit',
			'switches.update',
			'switches.destroy',

			'cpus.index',
			'cpus.create',
			'cpus.store',
			'cpus.show',
			'cpus.edit',
			'cpus.update',
			'cpus.destroy',

			'apps.index',
			'apps.create',
			'apps.store',
			'apps.show',
			'apps.edit',
			'apps.update',
			'apps.destroy',

			'sistemasoperativos.index',
			'sistemasoperativos.create',
			'sistemasoperativos.store',
			'sistemasoperativos.show',
			'sistemasoperativos.edit',
			'sistemasoperativos.update',
			'sistemasoperativos.destroy',

			'localizaciones.index',
			'localizaciones.create',
			'localizaciones.store',
			'localizaciones.show',
			'localizaciones.edit',
			'localizaciones.update',
			'localizaciones.destroy',
				
			'mantenimientos.index',
			'mantenimientos.create',
			'mantenimientos.store',
			'mantenimientos.show',
			'mantenimientos.edit',
			'mantenimientos.update',
			'mantenimientos.destroy',

			'tiposwitches.index',
			'tiposwitches.create',
			'tiposwitches.store',
			'tiposwitches.show',
			'tiposwitches.edit',
			'tiposwitches.update',
			'tiposwitches.destroy',
				
			'logs.index',
			'dashboard.index',
			'ubicacion.store',
		);

		$permisos_power_user = array(
			'index',

			'servidores.index',
			'servidores.create',
			'servidores.store',
			'servidores.show',
			'servidores.edit',
			'servidores.update',
			'servidores.destroy',

			'switches.index',
			'switches.create',
			'switches.store',
			'switches.show',
			'switches.edit',
			'switches.update',
			'switches.destroy',

			'apps.index',
			'apps.create',
			'apps.store',
			'apps.show',
			'apps.edit',
			'apps.update',
			'apps.destroy',
			
			'mantenimientos.index',
			'mantenimientos.create',
			'mantenimientos.store',
			'mantenimientos.show',
			'mantenimientos.edit',
			'mantenimientos.update',
			'mantenimientos.destroy',
				
			'logs.index',
			'dashboard.index',
			'ubicacion.store',
		);

		$permisos_user = array(
			'index',

			'servidores.index',

			'switches.index',

			'apps.index',
				
			'mantenimientos.index',
			
			'logs.index',
			'dashboard.index',
			'ubicacion.store',
		);

		PerfilPermiso::truncate();
		PerfilPermiso::insertPermisosPerfil($permisos_admin, 'Admin');
		PerfilPermiso::insertPermisosPerfil($permisos_power_user, 'Power User');
		PerfilPermiso::insertPermisosPerfil($permisos_user, 'User');

	}

}

?>
