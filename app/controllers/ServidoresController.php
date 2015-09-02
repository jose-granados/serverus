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
		$this->layout->content = View::make('servidores/create')->with(compact('servidores','localizaciones','cpus','sistemasOperativos','tiposServidores'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$servidores = new Servidores(Input::all());
		if($servidores->save()){
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
		$switches = Switches::find($id);
		$localizaciones = new Localizaciones;
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$sistemasOperativos = SistemasOperativos::obtenerSistemasOperativos();
		$cpus = Cpus::obtenerCpus();
		$tiposServidores = TiposServidores::obtenerTiposServidores();
		$this->layout->content = View::make('servidores/create')->with(compact('servidores','localizaciones','cpus','sistemasOperativos','tiposServidores'));
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
		$this->layout->content = View::make('servidores/edit')->with(compact('servidores','localizaciones','cpus','sistemasOperativos','tiposServidores'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$servidores = Servidores::find($id);
		
		if($servidores->update(Input::all())){
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
		if(Servidores::destroy($id)){
			return Redirect::to('servidores')->with('success', "Servidor eliminado con exito.");
		}else{
			return Redirect::to('servidores')->with('danger', "Ocurrio un error al eliminar el Servidor.");
		}
	}


}
