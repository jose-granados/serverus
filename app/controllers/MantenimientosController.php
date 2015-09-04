<?php

class MantenimientosController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$mantenimientos = Mantenimientos::all();
		$this->layout->content = View::make('mantenimientos/index')->with(compact('mantenimientos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$mantenimientos = new Mantenimientos;
		$servidoresFisicos = Servidores::obtenerServidoresFisicos(); 
		$switches = Switches::lists('nombre', 'id');
		$mantenimientos->servidor_id = null;
		$mantenimientos->switch_id = null;
		$this->layout->content = View::make('mantenimientos/create')->with(compact('mantenimientos','servidoresFisicos','switches'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$mantenimientos = new Mantenimientos(Input::all());
				
		if($mantenimientos->save()){
			Logs::salvarMovimiento('mantenimientos', $mantenimientos->id);
			if(Input::get('tipo_mantenimiento') == 1){
				$mantenimientosServidores = new MantenimientosServidores();
				$mantenimientosServidores->mantenimiento_id = $mantenimientos->id;
				$mantenimientosServidores->servidor_id = Input::get('servidor_id');
				$mantenimientosServidores->save();
			}else{
				$mantenimientosSwitches = new MantenimientosSwitches();
				$mantenimientosSwitches->mantenimiento_id = $mantenimientos->id;
				$mantenimientosSwitches->switch_id = Input::get('switch_id');
				$mantenimientosSwitches->save();
			}
			
			return Redirect::to('mantenimientos')->with('success', "Mantenimiento creado con exito");
		}else{
			return Redirect::to('mantenimientos/create')->withInput()->withErrors($mantenimientos->errors());
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
		$mantenimientos = Mantenimientos::find($id);
		$servidoresFisicos = Servidores::obtenerServidoresFisicos();
		$switches = Switches::lists('nombre', 'id');
		$mantenimientos->servidor_id = MantenimientosServidores::where('mantenimiento_id', $id)->first();
		$mantenimientos->servidor_id = $mantenimientos->servidor_id['servidor_id'];
		$mantenimientos->switch_id = MantenimientosSwitches::where('mantenimiento_id', $id)->first();
		$mantenimientos->switch_id = $mantenimientos->switch_id['switch_id'];
		$this->layout->content = View::make('mantenimientos/show')->with(compact('mantenimientos','servidoresFisicos','switches'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mantenimientos = Mantenimientos::find($id);
		$servidoresFisicos = Servidores::obtenerServidoresFisicos(); 
		$switches = Switches::lists('nombre', 'id');
		$mantenimientos->servidor_id = MantenimientosServidores::where('mantenimiento_id', $id)->first();
		$mantenimientos->servidor_id = $mantenimientos->servidor_id['servidor_id'];
		$mantenimientos->switch_id = MantenimientosSwitches::where('mantenimiento_id', $id)->first();
		$mantenimientos->switch_id = $mantenimientos->switch_id['switch_id'];
		$this->layout->content = View::make('mantenimientos/edit')->with(compact('mantenimientos','servidoresFisicos','switches'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$mantenimientos = Mantenimientos::find($id);
				
		if($mantenimientos->update(Input::all())){
			
			if(Input::get('tipo_mantenimiento') == 1){
				MantenimientosServidores::where('mantenimiento_id',$id)->delete();
				$mantenimientosServidores = new MantenimientosServidores();
				$mantenimientosServidores->mantenimiento_id = $id;
				$mantenimientosServidores->servidor_id = Input::get('servidor_id');
				$mantenimientosServidores->save();
			}else{
				MantenimientosSwitches::where('mantenimiento_id',$id)->delete();
				$mantenimientosSwitches = new MantenimientosSwitches();
				$mantenimientosSwitches->mantenimiento_id = $id;
				$mantenimientosSwitches->switch_id = Input::get('switch_id');
				$mantenimientosSwitches->save();
			}
			
			return Redirect::to('mantenimientos')->with('success', "Mantenimiento actualizado con exito");
		}else{
			return Redirect::route('mantenimientos.edit',$id)->withInput()->withErrors($mantenimientos->errors());
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
		if(MantenimientosServidores::where('mantenimiento_id', $id)->delete() && MantenimientosSwitches::where('mantenimiento_id', $id)->delete() && Mantenimientos::destroy($id)){
			return Redirect::to('mantenimientos')->with('success', "Mantenimiento eliminado con exito.");
		}else{
			return Redirect::to('mantenimientos')->with('danger', "Ocurrio un error al eliminar el Mantenimiento.");
		}
	}


}
