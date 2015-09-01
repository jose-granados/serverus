<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Servidores extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'switches';

	protected $hidden = array();
	protected $fillable = array('nombre','ram','hdd','ip','dns');
	protected $guarded = array();

	public static $rules = array(
		'nombre' 	=> 'required',
		'ram'  	=> 'required',
		'hdd'  	=> 'required',
		'ip'		=> 'required',
		'dns'		=> 'required'
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);

}
