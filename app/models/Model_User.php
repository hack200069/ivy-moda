<?php

namespace App\Models;

use App\Models\Entity_User;
use App\Models\Database;

class Model_User
{
	protected $db;
	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function authorize(Entity_User $userEntity)
	{
		$sql = "SELECT * FROM users WHERE email = '$userEntity->email'";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function saveUser(Entity_User $userEntity)
	{
		$role = CLIENT;
		$myDateTime = \DateTime::createFromFormat('d/m/Y', $userEntity->dob);
		$dob = $myDateTime->format('Y-m-d');
		$options = [
			'cost' => 12,
		];
		$password_hash = password_hash($userEntity->password, PASSWORD_BCRYPT, $options);

		$sql = "INSERT INTO users (email, password, first_name, last_name, phone, dob, gender, city, district, ward, address, role)
							VALUES ('$userEntity->email', '$password_hash', '$userEntity->first_name', '$userEntity->last_name', '$userEntity->phone'
                            , '$dob', '$userEntity->gender', '$userEntity->city', '$userEntity->district', '$userEntity->ward', '$userEntity->address', '$role')";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function checkExistEmail($email)
	{
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function checkExistPhone($phone)
	{
		$sql = "SELECT * FROM users WHERE phone = '$phone'";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function getListCustomer($page_no, $no_of_records_per_page, $q)
	{
		$offset = ($page_no - 1) * $no_of_records_per_page;
		$sql = "SELECT users.id,CONCAT(first_name,' ',last_name) AS name, email, password, phone, dob, gender, city, district, ward, address, SUM(total) AS total, COUNT(orders.id) AS totalOrder FROM users 
		LEFT JOIN orders ON orders.user_id = users.id
        WHERE CONCAT(first_name,' ',last_name) LIKE '%$q%' 
		AND role = 1
		GROUP BY users.id
        ORDER BY last_name
        LIMIT $offset, $no_of_records_per_page ";
		$result = $this->db->conn->query($sql);
		$list = array();
		while ($data = $result->fetch_array()) {
			$list[] = $data;
		}
		return $list;
	}

	public function getTotalPage($no_of_records_per_page, $q)
	{
		$sql = "SELECT COUNT(*) FROM users 
		WHERE CONCAT(first_name,' ',last_name) LIKE '%$q%'
		AND role = 1";
		$result = $this->db->conn->query($sql);
		$total_rows = $result->fetch_array()[0];
		$total_pages = ceil($total_rows / $no_of_records_per_page);
		return $total_pages;
	}

	public function blockCustomer($id)
	{
		$sql = "UPDATE users 
				SET password = SUBSTRING(password, 2, LENGTH(password))
				WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
	}

	public function unlockCustomer($id)
	{
		$sql = "UPDATE users 
				SET password = CONCAT('$', password)
				WHERE id = $id";
        $result = $this->db->conn->query($sql);
        return $result;
	}

	public function getTotalCustomer(){
        $sql = "SELECT COUNT(*) 
                FROM users 
                WHERE role = 1";
        $result = $this->db->conn->query($sql);
        return $result->fetch_array()[0];
    }
}
