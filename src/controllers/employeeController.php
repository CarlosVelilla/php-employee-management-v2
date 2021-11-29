<?php
$method = $_SERVER['REQUEST_METHOD'];
if (isset($_GET["form"])) {
	$method = "PUT";
}

function getAllEmployees()
{
	$employees = get();

	if (isset($employees)) {
		require_once  "../views/dashboard.php";
	} else {
		// error("Ha habido un problema con la base de datos");
	}
}
