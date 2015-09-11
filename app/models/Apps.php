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
		'responsable_nombre'	=> 'required',
		'responsable_correo'	=> 'required|email',
		'responsable_telefono'	=> 'required',
		'ruta'					=>  array('required', 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \?=.-]*)*\/?$/')
	);

	public static $customMessages = array(
		'required'           => 'El campo :attribute es requerido.',
		'email'				 => 'El campo :attribute no es un correo valido.',
		'regex'			     => 'El campo :attribute es un formato invalido.'
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
