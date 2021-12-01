<?php

include_once 'helper/employee.php';

class MainModel extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get()
	{
		$items = [];

		try {
			$query = $this->db->connect()->query("SELECT * FROM employees");

			while ($row = $query->fetch()) {
				$item = new Employee();
				$item->name = $row['name'];
				$item->lastName = $row['last_name'];
				$item->gender = $row['gender'];
				$item->age = $row['age'];
				$item->streetAddress = $row['street_address'];
				$item->city = $row['city'];
				$item->state = $row['state'];
				$item->postalCode = $row['postal_code'];
				$item->phoneNumber = $row['phone_number'];
				$item->avatar = $row['avatar_seed'];

				array_push($items, $item);
			}

			return $items;
		} catch (PDOException $e) {
			return [];
		}
	}
}
