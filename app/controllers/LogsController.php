<?php

class LogsController extends BaseController {

	protected $layout = "layouts.main";

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$logs = Logs::all();
		$this->layout->content = View::make('logs/index')->with(compact('logs'));
	}



}
