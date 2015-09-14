<?php

class LocalizacionesController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$localizaciones = Localizaciones::all();
		$this->layout->content = View::make('localizaciones/index')->with(compact('localizaciones'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$localizaciones = new Localizaciones;
		$this->layout->content = View::make('localizaciones/create')->with(compact('localizaciones'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$localizaciones = new Localizaciones(Input::all());
		if($localizaciones->save()){
			Logs::salvarMovimiento('localizaciones', $localizaciones->id,'Alta de Localizaciones');
			return Redirect::to('localizaciones')->with('success', "Localizacion creada con exito");
		}else{
			return Redirect::to('localizaciones/create')->withInput()->withErrors($localizaciones->errors());
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$localizaciones = Localizaciones::find($id);
		$this->layout->content = View::make('localizaciones/show')->with(compact('localizaciones'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$localizaciones = Localizaciones::find($id);
		$this->layout->content = View::make('localizaciones/edit')->with(compact('localizaciones'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$localizaciones = Localizaciones::find($id);
		
		if($localizaciones->update(Input::all())){
			return Redirect::to('localizaciones')->with('success', "Localizaci&oacute;n actualizado con exito");
		}else{
			return Redirect::route('localizaciones.edit',$id)->withInput()->withErrors($localizaciones->errors());
		}

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if(Localizaciones::destroy($id)){
			return Redirect::to('localizaciones')->with('success', "Localizaci&oacute;n eliminado con exito.");
		}else{
			return Redirect::to('localizaciones')->with('danger', "Ocurrio un error al eliminar el Localizaci&oacute;n.");
		}
	}
	
	public function dashboard(){
		$localizaciones = Localizaciones::select('localizaciones.id','localizaciones.nombre as title','localizaciones.latitud as latitude','localizaciones.longitud as longitude','servidores.activo','servidores.id as servido_id')->
		join('servidores', 'servidores.localizacion_id','=','localizaciones.id')->orderBy('servidores.activo','desc')->get();
		foreach ($localizaciones as $localizacion){
			$localizacion->zoomLevel = 5;
			$localizacion->scale = 0.5;
			$localizacion->correcto = ($localizacion->activo) ? ($this->verificarApps($localizacion->servido_id)) : true;
		}
		
		return $localizaciones->toJson();
	}
	
	private function verificarApps($localizacion_id){
		$servidores = Apps::select()->where('activo',false)->count();
		return ($servidores > 0) ? true : false;
	}
	
	public static function ubicacion($id){
		$query = Servidores::select('localizacion_id')->where('id',$id)->first();
		return $query['localizacion_id'];	
	}
	
	public function verificarServidores(){
		$servidores = Servidores::select(
				'servidores.id',
				'ips_servidores.ip',
				'servidores.nombre as titulo',
				'localizaciones.nombre as ubicacion',
				'localizaciones.latitud',
				'localizaciones.longitud',
				'usuarios.email as correo'
		)->
		join('localizaciones','localizaciones.id','=','servidores.localizacion_id')->
		join('ips_servidores','ips_servidores.servidor_id','=','servidores.id')->
		join('usuarios','usuarios.usuario_id','=','usuarios.id')->
		where('servidores.verificar',true)->where('ips_servidores.primario',true)->get();
		
		foreach($servidores as $servidor) {
		
			$respuesta = $this->compruebaEstadoServidorApps('http://'.$servidor->ip);
				
			$data = array(
					'servidor'=>$servidor->titulo,
					'localizacion'=>$servidor->ubicacion,
					'latitud'=>$servidor->latitud,
					'longitud'=>$servidor->longitud,
					'aplicacion' => '',
			);
				
			if( is_bool($respuesta) && $respuesta === true ){
				Servidores::where('id',$servidor->id)->update(array('activo'=>true));
				$apps = Apps::select()->where('servidor_id',$servidor->id)->get();
				foreach ($apps as $app){
					$respuesta_apps = $this->compruebaEstadoServidorApps($app->ruta);
					if( is_bool($respuesta_apps) && $respuesta_apps === true ){
						Apps::where('id',$app->id)->update(array('activo'=>true));
					}else{
						Logs::salvarMovimiento('apps', $app->id,'Aplicacion Fuera de linea');
						Apps::where('id',$app->id)->update(array('activo'=>false));
		
						$data['mensaje'] = $respuesta_apps;
						$data['aplicacion'] = $app->nombre;
						$this->envioMail($data, $app->responsable_correo, 'Aplicacion Fuera de linea');
					}
				}
			}else{
				
				Servidores::where('id',$servidor->id)->update(array('activo'=>false));
				Logs::salvarMovimiento('servidores', $servidor->id,'Servidor Fuera de linea');
				$data['mensaje'] = $respuesta;
				$this->envioMail($data,$servidor->correo, 'Servidor Fuera de linea');
			}
		}
		return '';
	}
		
	private function envioMail($datos,$destinatario,$asunto){
		Mail::send('emails/notificacion', $datos, function($message) use ($destinatario,$asunto){
			$message->to($destinatario)->subject($asunto);
		});
	}
		
		
	private function compruebaEstadoServidorApps($url){
	
		$cl = curl_init($url);
		curl_setopt($cl,CURLOPT_CONNECTTIMEOUT,10);
		curl_setopt($cl,CURLOPT_HEADER,true);
		curl_setopt($cl,CURLOPT_NOBODY,true);
		curl_setopt($cl,CURLOPT_RETURNTRANSFER,true);
			
		$response = curl_exec($cl);
	
		$error = (!$response) ? curl_error($cl) : '';
	
		curl_close($cl);
			
		return ($response) ? true :$error ;
	}	
	
}
