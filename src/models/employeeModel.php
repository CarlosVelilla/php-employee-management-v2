<?php

class EmployeeModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function insert()
	{
		echo 'insert data';
	}
}


// require_once("helper/dbConnection.php");

// function get()
// {
// 	$query = conn()->prepare(
// 		"SELECT id, name, email, age, phone_number, city
// 		 FROM employees 
// 		 ORDER BY id ASC;"
// 	);

// 	try {
// 		$query->execute();
// 		$employees = $query->fetchAll();
// 		return $employees;
// 	} catch (PDOException $e) {
// 		return [];
// 	}
// }
