<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'usuarios';

	protected $hidden = array();
	protected $fillable = array('nombre','apellido_paterno','apellido_materno','telefono','email');
	protected $guarded = array();

	public static $rules = array(
		'nombre'            => 'required',
		'apellido_paterno'  => 'required',
		'apellido_materno'  => 'required',
		'telefono'          => 'required',
		'email'             => 'required|email|unique:usuarios,email,{id}',
		'password'          => 'required',
	);

	public static $customMessages = array(
		'required'           => 'El campo :attribute es requerido.',
		'unique'             => 'Un usuario con este :attribute ya existe.',
		'email'              => 'Verifique que el campo de :attribute es un correo valido.',
		'password.required'  => 'El campo contraseña es requerido.',
	);

}
