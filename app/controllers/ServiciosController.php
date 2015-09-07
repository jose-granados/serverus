<?php

class ServiciosController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$servicios = Servicios::all();
		$this->layout->content = View::make('servicios/index')->with(compact('servicios'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$servicios = new Servicios;
		$this->layout->content = View::make('servicios/create')->with(compact('servicios'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$servicios = new Servicios(Input::all());
		if($servicios->save()){
			Logs::salvarMovimiento('servicios', $servicios->id,'Alta de Servicios');
			return Redirect::to('servicios')->with('success', "Servicio creado con exito");
		}else{
			return Redirect::to('servicios/create')->withInput()->withErrors($servicios->errors());
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
		$servicios = Servicios::find($id);
		$this->layout->content = View::make('servicios/show')->with(compact('servicios'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$servicios = Servicios::find($id);
		$this->layout->content = View::make('servicios/edit')->with(compact('servicios'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$servicios = Servicios::find($id);
		
		if($servicios->update(Input::all())){
			return Redirect::to('servicios')->with('success', "Servicio actualizado con exito");
		}else{
			return Redirect::route('servicios.edit',$id)->withInput()->withErrors($servicios->errors());
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
		if(Servicios::destroy($id)){
			return Redirect::to('servicios')->with('success', "Servicio eliminado con exito.");
		}else{
			return Redirect::to('servicios')->with('danger', "Ocurrio un error al eliminar el Servicio.");
		}
	}


}
