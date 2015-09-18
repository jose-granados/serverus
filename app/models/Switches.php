<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Switches extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'switches';

	protected $hidden = array();
	protected $fillable = array('nombre','modelo','tipo','serie','version','usuario','password','localizacion_id','tipo_switch_id','password_enabled','marca');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 	=> 'required',
		'modelo'  	=> 'required',
		'serie'		=> 'required',
		'version'		=> 'required',
		'usuario'		=> 'required',
		'password'		=> 'required',
		'password_enabled'		=> 'required',
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);

}
