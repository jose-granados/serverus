<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */

	public function __construct(){

		if(Auth::check() && !Usuario::canAccess(Route::currentRouteName())){
			Redirect::to('acceso_denegado')->send();
		}	

	}

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
