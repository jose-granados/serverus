<?php

class Permiso extends Eloquent {

	protected $table = 'permisos';

	protected $fillable = array();

	protected $guarded = array();

	public static function getIdByName($nombre_permiso){
		return Permiso::where('nombre_permiso',$nombre_permiso)->first()->id;
	}

}

?>
