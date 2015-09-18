<?php

class TipoSwitchesController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tipo_switches = TipoSwitches::all();
		$this->layout->content = View::make('tiposwitches/index')->with(compact('tipo_switches'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$tipo_switches = new TipoSwitches;
		$this->layout->content = View::make('tiposwitches/create')->with(compact('tipo_switches'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$tipo_switches = new TipoSwitches(Input::all());
		if($tipo_switches->save()){
			Logs::salvarMovimiento('tiposwitches', $tipo_switches->id,'Alta de Tipo de Switches');
			return Redirect::to('tiposwitches')->with('success', "Tipo de switches creado con exito");
		}else{
			return Redirect::to('tiposwitches/create')->withInput()->withErrors($tipo_switches->errors());
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
		$tipo_switches = TipoSwitches::find($id);
		$this->layout->content = View::make('tiposwitches/show')->with(compact('tipo_switches'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tipo_switches = TipoSwitches::find($id);
		$this->layout->content = View::make('tiposwitches/edit')->with(compact('tipo_switches'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$tipo_switches = TipoSwitches::find($id);
		
		if($tipo_switches->update(Input::all())){
			return Redirect::to('tiposwitches')->with('success', "Tipo de Switche actualizado con exito");
		}else{
			return Redirect::route('tiposwitches.edit',$id)->withInput()->withErrors($tipo_switches->errors());
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
		if(TipoSwitches::destroy($id)){
			return Redirect::to('tiposwitches')->with('success', "Tipo de Switche eliminado con exito.");
		}else{
			return Redirect::to('tiposwitches')->with('danger', "Ocurrio un error al eliminar el Tipo de Switche.");
		}
	}


}
