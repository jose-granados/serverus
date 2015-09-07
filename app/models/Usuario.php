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

	public static function canAccess($permiso){
		$permisos = Session::get('permisos');
		return (in_array($permiso, $permisos)) ? true : false;
	}

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

	public static function obtieneUsuarios(){
		$retorno = array();
		$usuarios = Usuario::all();
		foreach($usuarios as $usuario) {
			$retorno[$usuario->id] = $usuario->nombre;
		}		
		return $retorno;
	}
}
