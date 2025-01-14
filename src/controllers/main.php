<?php

class Main extends Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->view->employees = [];
	}

	function render()
	{
		// $employees = $this->model->get();
		// $this->view->employees = $employees;
		$this->view->render('main/index');
	}

	function getEmployees() {
		echo json_encode($this->model->get());
	}

	function deleteEmployee($param = null) {
		$this->model->deleteEmployee($param);
	}
}
