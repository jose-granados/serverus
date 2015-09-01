<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Symfony\Component\Translation\Tests\Loader\LocalizedTestCase;

class Localizaciones extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'localizaciones';

	protected $hidden = array();
	protected $fillable = array('nombre','latitud','longitud');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 		=> 'required',
		'latitud'  		=> 'required',
		'longitud'  	=> 'required',
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);
	
	public static function obtenerLocalizaciones(){
		$retorno = array();
		$localizaciones = Localizaciones::all();
		foreach($localizaciones as $localizacion) {
			$retorno[$localizacion->id] = $localizacion->nombre;
		}
	
		return $retorno;
	}
}
