<?php

class CpusController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$cpus = Cpus::all();
		$this->layout->content = View::make('cpus/index')->with(compact('cpus'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$cpus = new Cpus;
		$this->layout->content = View::make('cpus/create')->with(compact('cpus'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$cpus = new Cpus(Input::all());
		if($cpus->save()){
			return Redirect::to('cpus')->with('success', "CPU creado con exito");
		}else{
			return Redirect::to('cpus/create')->withInput()->withErrors($cpus->errors());
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
		$cpus = Cpus::find($id);
		$this->layout->content = View::make('cpus/show')->with(compact('cpus'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cpus = Cpus::find($id);
		$this->layout->content = View::make('cpus/edit')->with(compact('cpus'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cpus = Cpus::find($id);
		
		if($cpus->update(Input::all())){
			return Redirect::to('cpus')->with('success', "CPU actualizado con exito");
		}else{
			return Redirect::route('cpus.edit',$id)->withInput()->withErrors($cpus->errors());
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
		if(Cpus::destroy($id)){
			return Redirect::to('cpus')->with('success', "CPU eliminado con exito.");
		}else{
			return Redirect::to('cpus')->with('danger', "Ocurrio un error al eliminar el CPU.");
		}
	}


}
