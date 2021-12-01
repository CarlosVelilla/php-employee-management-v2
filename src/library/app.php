<?php

require_once './src/controllers/errors.php';
class App
{
	function __construct()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		if (empty($url[0])) {
			$controllerArchive = 'src/controllers/login.php';
			require_once $controllerArchive;
			$controller = new Login();
			$controller->loadModel('login');
			$controller->render();
			return false;
		}

		$controllerArchive = 'src/controllers/' . $url[0] . '.php';

		if (file_exists($controllerArchive)) {
			require_once $controllerArchive;

			// inicializar controlador
			$controller = new $url[0];
			$controller->loadModel($url[0]);

			// si hay un método que se requiere cargar
			if (isset($url[1])) {
				$controller->{$url[1]}();
			} else {
				$controller->render();
			}
		} else {
			$controller = new Errors();
		}
	}
}
