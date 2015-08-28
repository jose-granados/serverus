<?php

class SistemasOperativosController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sistemasOperativos = SistemasOperativos::all();
		$this->layout->content = View::make('sistemasoperativos/index')->with(compact('sistemasOperativos'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$sistemasOperativos = new SistemasOperativos;
		$this->layout->content = View::make('sistemasoperativos/create')->with(compact('sistemasOperativos'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$sistemasOperativos = new SistemasOperativos(Input::all());
		if($sistemasOperativos->save()){
			return Redirect::to('sistemasoperativos')->with('success', "Sistemas Operativo creado con exito");
		}else{
			return Redirect::to('sistemasoperativos/create')->withInput()->withErrors($sistemasOperativos->errors());
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
		$sistemasOperativos = SistemasOperativos::find($id);
		$this->layout->content = View::make('sistemasoperativos/show')->with(compact('sistemasOperativos'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sistemasOperativos = SistemasOperativos::find($id);
		$this->layout->content = View::make('sistemasoperativos/edit')->with(compact('sistemasOperativos'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sistemasOperativos = SistemasOperativos::find($id);
		
		if($sistemasOperativos->update(Input::all())){
			return Redirect::to('sistemasoperativos')->with('success', "Sistema Operativo actualizado con exito");
		}else{
			return Redirect::route('sistemasoperativos.edit',$id)->withInput()->withErrors($sistemasOperativos->errors());
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
		if(SistemasOperativos::destroy($id)){
			return Redirect::to('sistemasoperativos')->with('success', "Sistema Operativo eliminado con exito.");
		}else{
			return Redirect::to('sistemasoperativos')->with('danger', "Ocurrio un error al eliminar el Sistema Operativo.");
		}
	}


}
