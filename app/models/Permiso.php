<?php

class Permiso extends Eloquent {

	protected $table = 'permisos';

	protected $fillable = array();

	protected $guarded = array();

	public static function getIdByName($nombre_permiso){
		return Permiso::where('nombre_permiso',$nombre_permiso)->first()->id;
	}

	public static function getByLoggedUser(){

		$permisos = DB::table('perfiles')
					->join('perfiles_permisos', 'perfiles_permisos.perfil_id', '=', 'perfiles.id')
					->join('permisos', 'perfiles_permisos.permiso_id', '=', 'permisos.id')
					->where('perfiles.id',Auth::user()->perfil_id)
					->get();
		$permisos_array = array();			
		
		foreach ($permisos as $permiso) {
			$permisos_array[] = $permiso->nombre_permiso;
		}

		return $permisos_array;
	}

}

?>
