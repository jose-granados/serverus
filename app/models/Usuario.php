<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Usuario extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array();
	protected $fillable = array();
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
