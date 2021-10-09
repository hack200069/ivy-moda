<?php

namespace App\Models;

class Entity_User
{
    public $id;
    public $email;
    public $password;
    public $first_name;
    public $last_name;
    public $phone;
    public $dob;
    public $gender;
    public $city;
    public $district;
    public $ward;
    public $address;
    public $role;

    public function __construct(
        $_id,
        $_email,
        $_password,
        $_first_name,
        $_last_name,
        $_phone,
        $_dob,
        $_gender,
        $_city,
        $_district,
        $_ward,
        $_address,
        $_role
    ) {
        $this->id = $_id;
        $this->email = $_email;
        $this->password = $_password;
        $this->first_name = $_first_name;
        $this->last_name = $_last_name;
        $this->phone = $_phone;
        $this->dob = $_dob;
        $this->gender = $_gender;
        $this->city = $_city;
        $this->district = $_district;
        $this->ward = $_ward;
        $this->address = $_address;
        $this->role = $_role;
    }
}
