<?php

class UsuariosController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $usuarios = Usuario::all();
		$this->layout->content = View::make('usuarios/index')->with(compact('usuarios'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			$usuario = new Usuario;
			$this->layout->content = View::make('usuarios/create')->with(compact('usuario'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$usuario = new Usuario(Input::all());
		$usuario->password = Hash::make(Input::get('password'));
        if($usuario->save()){
			return Redirect::to('usuarios')->with('success', "Usuario creado con exito");
		}else{
			return Redirect::to('usuarios/create')->withInput()->withErrors($usuario->errors());
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
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
