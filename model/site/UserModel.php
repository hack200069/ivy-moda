<?php

include("../enum/Active.php");

class UserModel extends Database{
	protected $db;

	public function __construct()
	{
		$this->db = new Database();
		$this->db->connect();
	}

	public function signup($email, $password, $firstName, $lastName, $phone, $dob, $gender, $city, $district, $ward, $address)
	{	
        // 0: Non Active, 1: Active, 2: Lock
		$sql = "INSERT INTO users (email, password, first_name, last_name, phone, dob, gender, city, district, ward, address, active)
							VALUES ('$email', '$password', '$firstName', '$lastName', '$phone'
                            , '$dob', '$gender', '$city', '$district', '$ward', '$address', '0')";
		$this->db->conn->query($sql);
	}

	public function checkExistEmails($email) {
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $this->db->conn->query($sql);
		
		return $result;
	}
}