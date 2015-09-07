<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Apps extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'apps';

	protected $hidden = array();
	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'nombre' 				=> 'required',
		'ruta'  				=> 'required',
		'reponsable_nombre'		=> 'required',
		'reponsable_correo'		=> 'required|email',
		'reponsable_telefono'	=> 'required'
	);

	public static $customMessages = array(
		'required'           => 'El campo :attribute es requerido.',
		'reponsable_correo'	 => 'Verifique que el campo de :attribute es un correo valido.'
	);

	public static function optieneApps(){
		$retorno = array();
		$apps = Apps::all();
		foreach($apps as $app) {
			$retorno[$app->id] = $app->nombre;
		}		
		return $retorno;
	}
}
