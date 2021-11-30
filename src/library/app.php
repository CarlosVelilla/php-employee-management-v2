<?
require_once './src/controllers/errors.php';
class App
{
	function __construct()
	{
		echo "<p>Nueva app</p>";
		$url = $_GET['url'];
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		$controllerArchive = 'src/controllers/' . $url[0] . '.php';

		if (file_exists($controllerArchive)) {
			require_once $controllerArchive;
			$controller = new $url[0];

			if (isset($url[1])) {
				$controller->{$url[1]}();
			}
		} else {
			$controller = new Errors();
		}
	}
}
