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

	public function authorize(Entity_User $userEntity){
		$sql = "SELECT * FROM users WHERE email = '$userEntity->email'";
		$result = $this->db->conn->query($sql);
		return $result;
	}

    public function saveUser(Entity_User $userEntity){
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

    public function checkExistEmail($email) {
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $this->db->conn->query($sql);
		return $result;
	}

	public function checkExistPhone($phone) {
		$sql = "SELECT * FROM users WHERE phone = '$phone'";
		$result = $this->db->conn->query($sql);
		return $result;
	}
}
