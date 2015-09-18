<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class TipoSwitches extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'tipos_switches';

	protected $hidden = array();
	protected $fillable = array('nombre','descripcion');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 		=> 'required',
		'descripcion' 	=> 'required'
	);

	public static $customMessages = array(
		'required'  => 'El campo :attribute es requerido.',
	);
}
