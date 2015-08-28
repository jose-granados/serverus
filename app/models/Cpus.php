<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Cpus extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'cpus';

	protected $hidden = array();
	protected $fillable = array('nombre');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 		=> 'required'
	);

	public static $customMessages = array(
		'required'  => 'El campo :attribute es requerido.',
	);

}
