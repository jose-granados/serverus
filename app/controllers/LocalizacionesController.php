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
			return Redirect::to('localizaciones')->with('success', "Servicio creado con exito");
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
		$localizaciones = Localizaciones::select('nombre as title','latitud as latitude','longitud as longitude')->get();
		foreach ($localizaciones as $localizacion){
			$localizacion->zoomLevel = 5;
			$localizacion->scale = 0.5;
		}
		return $localizaciones->toJson();
	}


}
