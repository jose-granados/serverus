<?php

class HomeController extends BaseController{

    protected $layout = "layouts.main";

    public function index()
    {
        if(Auth::check()){
            $apps = Apps::optieneApps();
            $usuarios = Usuario::obtieneUsuarios();
            $logs = Logs::select('descripcion','id','created_at')->take(10)->get();
            $this->layout->content = View::make('dashboard/index')->with(compact('apps','usuarios','logs'));;

        }else{
            return View::make('login');
        }
    }

    public function login(){
        $loginData = array(
            'email'		=> Input::get('email'),
            'password'	=> Input::get('password')
        );
        if(Auth::attempt($loginData)){
            Session::put('permisos', Permiso::getByLoggedUser());
            return Redirect::to('/')->with('success', 'Iniciaste sesion');
        }else{
            return Redirect::to('/')->with('danger', 'Datos incorrectos')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        Session::forget('permisos');
        return Redirect::to('/')->with('notice', 'Cerraste sesión');
    }


}
