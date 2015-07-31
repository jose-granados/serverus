<?php

class Perfil extends Eloquent {

	protected $table = 'perfiles';

	protected $fillable = array();

	protected $guarded = array();

	public static function getIdByName($nombre_perfil){
		return Perfil::where('nombre_perfil',$nombre_perfil)->first()->id;
	}

}

?>
