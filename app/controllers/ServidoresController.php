<?php

class ServidoresController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$servidores = Servidores::all();
		$this->layout->content = View::make('servidores/index')->with(compact('servidores'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$servidores = new Servidores;
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$sistemasOperativos = SistemasOperativos::obtenerSistemasOperativos();
		$cpus = Cpus::obtenerCpus();
		$tiposServidores = TiposServidores::obtenerTiposServidores();
		$usuariosServidores = array();
		$servidoresFisicos = Servidores::obtenerServidoresFisicos(); 
		$servidores->padre_servidor_id = null;
		$ips = array();
		$dns = array();
		$this->layout->content = View::make('servidores/create')->with(compact('servidores','localizaciones','cpus','sistemasOperativos','tiposServidores','usuariosServidores','servidoresFisicos','ips','dns'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		DB::beginTransaction();
		$servidores = new Servidores(Input::all());
		unset($servidores->usuario);
		unset($servidores->password);
		unset($servidores->ip);
		unset($servidores->tipo_ip);
		unset($servidores->primario);
		unset($servidores->dns);
		unset($servidores->padre_servidor_id);
		
		$user = Input::get('usuario');
		$pass = Input::get('password');
		
		$ips = Input::get('ip');
		$tipo_ips = Input::get('tipo_ip');
		$primarios = Input::get('primario');
		$dns = Input::get('dns');
		
		$servidores->vnc = ($servidores->vnc == 'on') ? 1 : 0;
		$servidores->verificar = ($servidores->verificar == 'on') ? 1 : 0;
		if($servidores->save()){
			Logs::salvarMovimiento('servidores', $servidores->id,'Alta de Servidores');
			foreach ($user as $key => $value) {
				$usuariosServidores = new UsuariosServidores();
				$usuariosServidores->usuario = $user[$key];
				$usuariosServidores->password = $pass[$key];
				$usuariosServidores->servidor_id = $servidores->id;				
				if(!$usuariosServidores->save()){
					DB::rollback();
					return Redirect::to('servidores/create')->withInput()->withErrors($usuariosServidores->errors());
				}
			}
			
			foreach ($ips as $key => $value) {
				$ipsServidores = new IpsServidores();
				$ipsServidores->ip = $ips[$key];
				$ipsServidores->tipo_ip = $tipo_ips[$key];
				$ipsServidores->primario = $primarios[$key];
				$ipsServidores->servidor_id = $servidores->id;				
				$ipsServidores->save();
			}
			
			foreach ($dns as $key => $value) {
				$dnsServidores = new DnsServidores();
				$dnsServidores->dns = $dns[$key];
				$dnsServidores->servidor_id = $servidores->id;
				$dnsServidores->save();
			}
			
			if(Input::get('tipo_servidor_id') == 2){
				$vmsServidores = new VmsServidores();
				$vmsServidores->hijo_servidor_id = $servidores->id;
				$vmsServidores->padre_servidor_id = Input::get('padre_servidor_id');
				$vmsServidores->save();
			}
			DB::commit();
			return Redirect::to('servidores')->with('success', "Servidor creado con exito");
		}else{
			return Redirect::to('servidores/create')->withInput()->withErrors($servidores->errors());
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
		$servidores = Servidores::find($id);
		$localizaciones = new Localizaciones;
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$sistemasOperativos = SistemasOperativos::obtenerSistemasOperativos();
		$cpus = Cpus::obtenerCpus();
		$tiposServidores = TiposServidores::obtenerTiposServidores();
		$usuariosServidores = UsuariosServidores::where('servidor_id',$id)->get();
		$servidoresFisicos = Servidores::obtenerServidoresFisicos();
		$ips = IpsServidores::where('servidor_id',$id)->get();
		$dns = DnsServidores::where('servidor_id',$id)->get();
		$servidores->padre_servidor_id = VmsServidores::where('hijo_servidor_id', $id)->first();
		$servidores->padre_servidor_id = $servidores->padre_servidor_id['padre_servidor_id'];
		
		$this->layout->content = View::make('servidores/show')->with(compact('servidores','localizaciones','cpus','sistemasOperativos','tiposServidores','usuariosServidores','servidoresFisicos','ips','dns'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servidores = Servidores::find($id);
		$localizaciones = new Localizaciones;
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$sistemasOperativos = SistemasOperativos::obtenerSistemasOperativos();
		$cpus = Cpus::obtenerCpus();
		$tiposServidores = TiposServidores::obtenerTiposServidores();
		$usuariosServidores = UsuariosServidores::where('servidor_id',$id)->get();
		$servidoresFisicos = Servidores::obtenerServidoresFisicos();
		$ips = IpsServidores::where('servidor_id',$id)->get();
		$dns = DnsServidores::where('servidor_id',$id)->get();
		$servidores->padre_servidor_id = VmsServidores::where('hijo_servidor_id', $id)->first();
		$servidores->padre_servidor_id = $servidores->padre_servidor_id['padre_servidor_id'];
		$this->layout->content = View::make('servidores/edit')->with(compact('servidores','localizaciones','cpus','sistemasOperativos','tiposServidores','usuariosServidores','servidoresFisicos','ips','dns'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		DB::beginTransaction();
		$servidores = Servidores::find($id);
		$datos = Input::all();
		unset($datos['usuario']);
		unset($datos['password']);
		unset($datos['ip']);
		unset($datos['tipo_ip']);
		unset($datos['primario']);
		unset($datos['dns']);
		unset($datos['padre_servidor_id']);
		
		$user = Input::get('usuario');
		$pass = Input::get('password');
		
		$ips = Input::get('ip');
		$tipo_ips = Input::get('tipo_ip');
		$dns = Input::get('dns');
		$primarios = Input::get('primario');
		$user = Input::get('usuario');
		$pass = Input::get('password');

		$servidores->vnc = ($servidores->vnc == 'on') ? 1 : 0;
		$servidores->verificar = ($servidores->verificar == 'on') ? 1 : 0;
		if($servidores->update($datos)){			
			UsuariosServidores::where('servidor_id', $id)->delete();
			foreach ($user as $key => $value) {
				$usuariosServidores = new UsuariosServidores();
				$usuariosServidores->usuario = $user[$key];
				$usuariosServidores->password = $pass[$key];
				$usuariosServidores->servidor_id = $id;
				if(!$usuariosServidores->save()){
					DB::rollback();
					return Redirect::route('servidores.edit',$id)->withInput()->withErrors($usuariosServidores->errors());
				}
				
			}
			
			IpsServidores::where('servidor_id', $id)->delete();
			foreach ($ips as $key => $value) {
				$ipsServidores = new IpsServidores();
				$ipsServidores->ip = $ips[$key];
				$ipsServidores->tipo_ip = $tipo_ips[$key];
				$ipsServidores->primario = $primarios[$key];
				$ipsServidores->servidor_id = $servidores->id;
				$ipsServidores->save();
			}
				
			DnsServidores::where('servidor_id', $id)->delete();
			foreach ($dns as $key => $value) {
				$dnsServidores = new DnsServidores();
				$dnsServidores->dns = $dns[$key];
				$dnsServidores->servidor_id = $servidores->id;
				$dnsServidores->save();
			}
				
			VmsServidores::where('hijo_servidor_id', $id)->delete();
			if(Input::get('tipo_servidor_id') == 2){
				$vmsServidores = new VmsServidores();
				$vmsServidores->hijo_servidor_id = $servidores->id;
				$vmsServidores->padre_servidor_id = Input::get('padre_servidor_id');
				$vmsServidores->save();
			}
			DB::commit();
			return Redirect::to('servidores')->with('success', "Servidor actualizado con exito");
		}else{
			return Redirect::route('servidores.edit',$id)->withInput()->withErrors($servidores->errors());
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
		IpsServidores::where('servidor_id', $id)->delete();
		DnsServidores::where('servidor_id', $id)->delete();
		VmsServidores::where('hijo_servidor_id', $id)->delete();
		UsuariosServidores::where('servidor_id', $id)->delete(); 
		if(Servidores::destroy($id)){
			return Redirect::to('servidores')->with('success', "Servidor eliminado con exito.");
		}else{
			return Redirect::to('servidores')->with('danger', "Ocurrio un error al eliminar el Servidor.");
		}
	}


}
