<?php

class SwitchesController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$switches = Switches::all();
		$this->layout->content = View::make('switches/index')->with(compact('switches'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$switches = new Switches;
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$tipoSwitches = TipoSwitches::obtenerTipoSwitches();
		$this->layout->content = View::make('switches/create')->with(compact('switches','localizaciones','tipoSwitches'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$switches = new Switches(Input::all());
		if($switches->save()){
			Logs::salvarMovimiento('switches', $switches->id,'Alta de Switches');
			return Redirect::to('switches')->with('success', "Switch creado con exito");
		}else{
			return Redirect::to('switches/create')->withInput()->withErrors($switches->errors());
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
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$tipoSwitches = TipoSwitches::obtenerTipoSwitches();
		$this->layout->content = View::make('switches/show')->with(compact('switches','localizaciones','tipoSwitches'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$switches = Switches::find($id);
		$localizaciones = Localizaciones::obtenerLocalizaciones();
		$tipoSwitches = TipoSwitches::obtenerTipoSwitches();
		$this->layout->content = View::make('switches/edit')->with(compact('switches','localizaciones','tipoSwitches'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$switches = Switches::find($id);
		
		if($switches->update(Input::all())){
			return Redirect::to('switches')->with('success', "Switch actualizado con exito");
		}else{
			return Redirect::route('switches.edit',$id)->withInput()->withErrors($switches->errors());
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
		if(Switches::destroy($id)){
			return Redirect::to('switches')->with('success', "Switch eliminado con exito.");
		}else{
			return Redirect::to('switches')->with('danger', "Ocurrio un error al eliminar el Switch.");
		}
	}


}
