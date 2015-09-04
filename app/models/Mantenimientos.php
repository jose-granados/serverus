<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Mantenimientos extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'mantenimientos';

	protected $hidden = array();
	protected $fillable = array('descripcion','fecha','responsable_nombre','responsable_correo','responsable_telefono');
	protected $guarded = array();

	public static $rules = array(
		'descripcion' 			=> 'required',
		'fecha' 				=> 'required',
		'responsable_nombre' 	=> 'required',
		'responsable_correo' 	=> 'required',
		'responsable_telefono'	=> 'required'
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);

}
