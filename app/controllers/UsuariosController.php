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
		$usuario = Usuario::find($id);
		$this->layout->content = View::make('usuarios/show')->with(compact('usuario'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$usuario = Usuario::find($id);
		$this->layout->content = View::make('usuarios/edit')->with(compact('usuario'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$usuario = Usuario::find($id);

		// Forcing A Unique Rule To Ignore A Given ID
		$usuario::$rules['email'] = str_replace("{id}", $id, $usuario::$rules['email']);

		if($usuario->update(Input::all())){
			return Redirect::to('usuarios')->with('success', "Usuario actualizado con exito");
		}else{
			return Redirect::route('usuarios.edit',$id)->withInput()->withErrors($usuario->errors());
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
		if(Usuario::destroy($id)){
			return Redirect::to('usuarios')->with('success', "Usuario eliminado con exito.");
		}else{
			return Redirect::to('usuarios')->with('danger', "Ocurrio un error al eliminar el usuario.");
		}
	}


}
