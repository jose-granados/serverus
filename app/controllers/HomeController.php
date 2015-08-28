<?php

class HomeController extends BaseController{

    protected $layout = "layouts.main";

    public function index()
    {
        if(Auth::check()){

            $this->layout->content = View::make('dashboard/index');

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
            return Redirect::to('/')->with('success', 'Iniciaste sesion');
        }else{
            return Redirect::to('/')->with('message', '<div class="alert alert-danger">Datos incorrectos </div>')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/')->with('message', 'Cerraste sesión');
    }


}
