<?php

class PerfilPermiso extends Eloquent {

	protected $table = 'perfiles_permisos';

	protected $fillable = array();

	protected $guarded = array();

	public static function insertPermisosPerfil($permios,$perfil){
		foreach($permios as $permiso){
			PerfilPermiso::create(array(
				'perfil_id' => Perfil::getIdByName($perfil),
				'permiso_id' => Permiso::getIdByName($permiso),
			));
		}
	}
}

?>
