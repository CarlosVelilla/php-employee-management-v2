<?php

class View
{
	function __construct()
	{
		echo 'vista base';
	}

	function render($name)
	{
		require 'src/views/' . $name . '.php';
	}
}
