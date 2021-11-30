<?php

require_once './src/controllers/errors.php';
class App
{
	function __construct()
	{
		// echo "<p>Nueva app</p>";
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		if (empty($url[0])) {
			$controllerArchive = 'src/controllers/login.php';
			require_once $controllerArchive;
			$controller = new Login();
			$controller->loadModel('login');
			return false;
		}

		$controllerArchive = 'src/controllers/' . $url[0] . '.php';

		if (file_exists($controllerArchive)) {
			require_once $controllerArchive;
			$controller = new $url[0];
			$controller->loadModel($url[0]);

			if (isset($url[1])) {
				$controller->{$url[1]}();
			}
		} else {
			$controller = new Errors();
		}
	}
}
