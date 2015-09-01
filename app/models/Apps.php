<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Apps extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'apps';

	protected $hidden = array();
	protected $fillable = array('nombre','ruta');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 		=> 'required',
		'ruta'  		=> 'required'
	);

	public static $customMessages = array(
		'required'           => 'El campo :attribute es requerido.',
	);

}
