<?php

class Perfil extends Eloquent {

	protected $table = 'perfiles';

	protected $fillable = array();

	protected $guarded = array();

	public static function getIdByName($nombre_perfil){
		return Perfil::where('nombre_perfil',$nombre_perfil)->first()->id;
	}

	public static function obtienePerfilUser(){
		$perfilUser = Perfil::select('nombre_perfil')->where('id',Auth::user()->perfil_id)->first();
		return $perfilUser['nombre_perfil'];
	}
}

?>
