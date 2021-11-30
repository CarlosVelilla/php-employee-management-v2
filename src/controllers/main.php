<?php

class Main extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->view->render('main/index');
		echo 'Nuevo controlador main';
	}

	function saludo()
	{
		echo '<p>metodo saludo ejecutado</p>';
	}
}
