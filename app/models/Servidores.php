<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Servidores extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'servidores';

	protected $hidden = array();
	protected $fillable = array();
	protected $guarded = array();

	public static $rules = array(
		'nombre' 	=> 'required',
		'ram'  		=> 'required',
		'hdd'  		=> 'required',
		'verificar'	=> 'required'
	);

	public static $customMessages = array(
		'required'	=> 'El campo :attribute es requerido.',
	);

	public static function obtenerServidores(){
		$retorno = array();
		$servidores = Servidores::all();
		foreach($servidores as $servidor) {
			$retorno[$servidor->id] = $servidor->nombre;
		}
		return $retorno;
	}
	
	public static function obtenerServidoresFisicos(){
		$retorno = array();
		$servidores = Servidores::where('tipo_servidor_id',1)->get();
		foreach($servidores as $servidor) {
			$retorno[$servidor->id] = $servidor->nombre;
		}
	
		return $retorno;
	}
}
