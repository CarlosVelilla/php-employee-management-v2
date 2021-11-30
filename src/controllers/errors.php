<?php
class Errors extends Controller
{
	function __construct()
	{
		parent::__construct();
		$this->view->message = "Error loading resource";
		$this->view->render('error/index');
	}
}
