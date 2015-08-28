<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class SistemasOperativos extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'sistemas_operativos';

	protected $hidden = array();
	protected $fillable = array('nombre','arquitectura','version');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 		=> 'required',
		'arquitectura'  	=> 'required',
		'version'  		=> 'required'
	);

	public static $customMessages = array(
		'required'           => 'El campo :attribute es requerido.',
	);

}
