<?php

class PerfilPermiso extends Eloquent {

	protected $table = 'perfiles_permisos';

	protected $fillable = array();

	protected $guarded = array();

	public static function insertPermisosPerfil($permios,$perfil){
		$perfil_id = Perfil::getIdByName($perfil);
		foreach($permios as $permiso){
			PerfilPermiso::create(array(
				'perfil_id' => $perfil_id,
				'permiso_id' => Permiso::getIdByName($permiso),
			));
		}
	}
}

?>
