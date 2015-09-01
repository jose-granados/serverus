<?php

class TiposServidores extends Eloquent {

	protected $table = 'tipos_servidores';

	protected $fillable = array();

	protected $guarded = array();

	public static function obtenerTiposServidores(){
		$retorno = array();
		$tiposServidores = TiposServidores::all();
		foreach($tiposServidores as $tipoServidor) {
			$retorno[$tipoServidor->id] = $tipoServidor->nombre;
		}
	
		return $retorno;
	}
}

?>
