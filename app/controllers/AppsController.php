<?php

class AppsController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of| the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apps = Apps::all();
		$this->layout->content = View::make('apps/index')->with(compact('apps'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$apps = new Apps;
		$servicios = new Servicios;
		$servicios = $servicios->obtenerServicios();
		$this->layout->content = View::make('apps/create')->with(compact('apps','servicios'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$apps = new Apps(Input::all());
		if($apps->save()){
			return Redirect::to('apps')->with('success', "Aplicacion creada con exito");
		}else{
			return Redirect::to('apps/create')->withInput()->withErrors($apps->errors());
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
		$apps = Apps::find($id);
		$this->layout->content = View::make('apps/show')->with(compact('apps'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$apps = Apps::find($id);
		$this->layout->content = View::make('apps/edit')->with(compact('apps'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$apps = Apps::find($id);
		
		if($apps->update(Input::all())){
			return Redirect::to('apps')->with('success', "Aplicacion actualizado con exito");
		}else{
			return Redirect::route('apps.edit',$id)->withInput()->withErrors($apps->errors());
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
		if(Apps::destroy($id)){
			return Redirect::to('apps')->with('success', "Aplicacion eliminada con exito.");
		}else{
			return Redirect::to('apps')->with('danger', "Ocurrio un error al eliminar la Aplicacion.");
		}
	}


}
