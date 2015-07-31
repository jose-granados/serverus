	<?php

class PerfilesPermisosSeeder extends Seeder {

	public function run(){

		$permisos_admin = array(
			'crear.servidor',
			'ver.servidor',
			'editar.servidor',
			'eliminar.servidor',
		);

		$permisos_power_user = array(
		);

		$permisos_user = array(
		);

		PerfilPermiso::truncate();
		PerfilPermiso::insertPermisosPerfil($permisos_admin, 'Admin');
		PerfilPermiso::insertPermisosPerfil($permisos_power_user, 'Power User');
		PerfilPermiso::insertPermisosPerfil($permisos_user, 'User');

	}

}

?>
