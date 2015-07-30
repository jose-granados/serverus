<?php

class Configuracion extends Eloquent {

	protected $table = 'configuraciones';

	public static $booleans = array(
		'app.debug',
		'database.log_query'
	);

	public static function setFromDB(){

		$configuraciones = Configuracion::all();

		foreach($configuraciones as $configuracion) {
			if(in_array($configuracion->nombre_configuracion, Configuracion::$booleans)){
				$configuracion->valor = Configuracion::parseBool($configuracion->valor);
			}
			Config::set($configuracion->nombre_configuracion,$configuracion->valor);
		}

	}

	public static function parseBool($valor){
		return (strtolower($valor) == 'true') ? true : false;
	}

}

?>
