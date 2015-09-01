<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Servicios extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'servicios';

	protected $hidden = array();
	protected $fillable = array('nombre','version');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 		=> 'required',
		'version'  		=> 'required'
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);

	public static function obtenerServicios(){
		$retorno = array();
		$servicios = Servicios::all();
		foreach($servicios as $servicio) {
			$retorno[$servicio->id] = $servicio->nombre;
		}
		
		return $retorno;
	}

}
