<?php

class Main extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->view->employees = [];
	}

	function render()
	{
		echo $this->model;
		// $employees = $this->model->get();
		// $this->view->employees = $employees;
		$this->view->render('main/index');
	}
}
