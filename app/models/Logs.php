<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Logs extends Ardent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $table = 'logs';

	protected $hidden = array();
	protected $fillable = array();
	protected $guarded = array();

	public static function salvarMovimiento($ruta,$indice,$descripcion){
		$logs = new Logs();
		$logs->ruta = $ruta;
		$logs->indice = $indice;
		$logs->descripcion = $descripcion;
		$logs->save();
	}
}
