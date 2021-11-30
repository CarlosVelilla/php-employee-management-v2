<?
require_once 'controllers/error.php';

class App
{
	function __construct()
	{
		echo "<p>Nueva app</p>";
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		var_dump($url);
		$controllerArchive = 'controllers/' . $url[0] . '.php';

		echo $controllerArchive;
		if (file_exists($controllerArchive)) {
			require_once $controllerArchive;
			$controller = new $url[0];

			if (isset($url[1])) {
				$controller->{$url[1]}();
			}
		} else {
			$controller = new Error();
		}
	}
}
