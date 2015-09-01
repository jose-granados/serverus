<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Switches extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'switches';

	protected $hidden = array();
	protected $fillable = array('nombre','modelo','tipo','serie','version','usuario','password','localizacion_id');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 	=> 'required',
		'modelo'  	=> 'required',
		'tipo'  	=> 'required',
		'serie'		=> 'required',
		'version'		=> 'required',
		'usuario'		=> 'required',
		'password'		=> 'required',
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);

}
