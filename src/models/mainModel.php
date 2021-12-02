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
				$item->id = $row['id'];
				$item->name = $row['name'];
				$item->email = $row['email'];
				// $item->lastName = $row['last_name'];
				// $item->gender = $row['gender'];
				$item->age = $row['age'];
				$item->streetAddress = $row['street_address'];
				$item->city = $row['city'];
				$item->state = $row['state'];
				$item->postalCode = $row['postal_code'];
				$item->phoneNumber = $row['phone_number'];
				// $item->avatar = $row['avatar_seed'];

				array_push($items, $item);
			}

			return $items;
		} catch (PDOException $e) {
			return [];
		}
	}

	public function deleteEmployee($id)
	{
		$query = $this->db->connect()->prepare("DELETE FROM employees WHERE id= :id");
		try {
			$query->execute([
				'id' => $id
			]);
			return true;
		} catch (PDOException $e) {
			return false;
		}
	}

	public function updateEmployee($item)
	{
		$id = $item['id'];
		unset($item['id']);

		$query = "UPDATE employees SET " .
			implode(', ', array_map(function ($key) {
				return "$key = :$key";
			}, array_keys($item)))
			. " WHERE id = :id;";

		$item['id'] = $id;

		try {
			$this->db->connect()->query($query, $item, false);
		} catch (PDOException $e) {
			return null;
		}
		return $item;
		// $query = $this->db->connect()->prepare(
		// 	"UPDATE employees 
		// 	 SET name = :name, email = :email, age = :age,  street_address = :street_address, city = :city, state = :state, postal_code = :postal_code, phone_number = :phone_number
		// 	 WHERE id= :id"
		// );

		// try {
		// 	$query->execute([
		// 		'id' => $item["id"],
		// 		'name' => $item["name"],
		// 		'email' => $item["email"],
		// 		'age' => $item["age"],
		// 		'street_address' => $item["street_address"],
		// 		'city' => $item["city"],
		// 		'state' => $item["state"],
		// 		'postal_code' => $item["postal_code"],
		// 		'phone_number' => $item["phone_number"]
		// 	]);
		// 	return true;
		// } catch (PDOException $e) {
		// 	return false;
		// }
	}
}
