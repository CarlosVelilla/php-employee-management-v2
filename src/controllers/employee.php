<?php
class Employee extends Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->render('employee/index');
	}
}
